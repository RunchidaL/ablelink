<link href="{{asset('/css/chooseaddress.css')}}" rel="stylesheet">


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
        {{-- <div class="Test">
            <div class="row" style="margin-bottom: 40px;  width: 750px; margin-left: 14%">
                <div class="col-md-4">ที่อยู่สำหรับการจัดส่ง</div>
                <div class="col-md-4">วิธีชำระเงิน</div>
                <div class="col-md-4">เสร็จสิ้น</div>
            </div>
        </div> --}}
        
        <form action="#" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form_wrap">
                <div class="form_1 data_info">
                    <div class="step">
                        <h2>ที่อยู่สำหรับการจัดส่ง</h2>
                    </div>
                    <div class="row">
                        <div class="col-md-5 mb-4">
                            <div class="address" style="background: #f1f1f1; border-radius: 20px; padding: 5% 10%">
                                <div class="choose-address">
                                    <input type="radio" id="address1" name="address" />
                                    <label for="address1"></label>
                                </div>
                                <div class="subaddress">
                                    <p>ผัดไท ประตูผี</p>
                                    <p>0801911150</p>
                                    <p>36 ซ.ผัดไท ถ.ประตูผี แขวงบางมด</p>
                                    <p>เขตผัดไทจงเจริญ, จังหวัดกรุงเทพมหานคร, 36190</p>
                                </div>
                            </div><br>
                            <div class="address">
                                <div class="choose-address">
                                    <input type="radio" id="address2" name="address"/>
                                    <label for="address2"></label>
                                </div>
                                <div class="subaddress">
                                    <p>ผัดไท ประตูผี</p>
                                    <p>0801911150</p>
                                    <p>36 ซ.ผัดไท ถ.ประตูผี แขวงบางมด</p>
                                    <p>เขตผัดไทจงเจริญ, จังหวัดกรุงเทพมหานคร, 36190</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6 mb-4">
                            <div class="card mb-4">
                                <div class="card-header py-3">
                                    <h5 class="mb-0">สินค้าในตะกร้า</h5>
                                </div>
                                <div class="card-body">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                                            <div>
                                            <strong>สินค้า</strong>
                                            </div>
                                            <span><strong>ราคา</strong></span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                                            <img src="images/products/40180.main.jpg" style="width: 100px; height: 80px; margin-right: 10px;">
                                            <p>RG6 Indoor CCTV Cable, white, Braid Shield aluminum 500m/Roll</p> 
                                            <span>$400.00</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                                            <img src="images/products/40180.main.jpg" style="width: 100px; height: 80px; margin-right: 10px;">
                                            <p>RG6 Indoor CCTV Cable, white, Power wire 500m/Roll</p> 
                                            <span>$200.00</span>
                                        </li>
                                        <hr>
                                        <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 ">
                                            <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                                                ราคารวม
                                                <span>$600.00</span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                                                ค่าจัดส่ง
                                                <span>$50.00</span>
                                            </li>
                                        </li>
                                        <hr>
                                        <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                                            <div><strong>ยอดสั่งซื้อรวม</strong></div>
                                            <span><strong>$650.00</strong></span>
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
                    <div class="row">
                        <div class="col-md-5 mb-4">
                            <div class="address" style="background: #f1f1f1; border-radius: 20px; padding: 5% 10%">
                                <div class="choose-address">
                                    <input type="radio" id="creditcompany" name="check" />
                                    <label for="creditcompany"></label>
                                </div>
                                <div class="subaddress">
                                    <h5>จ่ายผ่านเครดิตบริษัท</h5>
                                    <p>ยอดคงเหลือ 50,000 บาท</p>
                                </div>
                            </div><br>
                            <div class="address">
                                <div class="choose-address">
                                    <input type="radio" id="creditcard" name="check"/>
                                    <label for="creditcard"></label>
                                </div>
                                <div class="subaddress">
                                    <h5>ชำระเงินด้วยบัตรเครดิต</h5>
                                    <hr>
                                    <div class="form-group mb-2">
                                        <label for="exampleInputPassword1">หมายเลขบัตร *</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="หมายเลขบัตร">
                                    </div>
                                    <div class="form-group mb-2">
                                        <label for="exampleInputPassword1">ชื่อบัตร *</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="ชื่อบัตร">
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6 mb-4">
                            <div class="card mb-4">
                                <div class="card-header py-3">
                                    <h5 class="mb-0">สินค้าในตะกร้า</h5>
                                </div>
                                <div class="card-body">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                                            <div>
                                            <strong>สินค้า</strong>
                                            </div>
                                            <span><strong>ราคา</strong></span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                                            <img src="images/products/40180.main.jpg" style="width: 100px; height: 80px; margin-right: 10px;">
                                            <p>RG6 Indoor CCTV Cable, white, Braid Shield aluminum 500m/Roll</p>
                                            <span>$400.00</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                                            <img src="images/products/40180.main.jpg" style="width: 100px; height: 80px; margin-right: 10px;">
                                            <p>RG6 Indoor CCTV Cable, white, Power wire 500m/Roll</p>
                                            <span>$200.00</span>
                                        </li>
                                        <hr>
                                        <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 ">
                                            <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                                                ราคารวม
                                                <span>$600.00</span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                                                ค่าจัดส่ง
                                                <span>$50.00</span>
                                            </li>
                                        </li>
                                        <hr>
                                        <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                                            <div><strong>ยอดสั่งซื้อรวม</strong></div>
                                            <span><strong>$650.00</strong></span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form_3 data_info" style="display: none;">
                    <div class="step">
                        <h2>เสร็จสิ้น</h2>
                    </div>
                    <div>
                        <h3>
                            <i class="bi bi-bag-check-fill" style="color: rgb(48, 172, 48)"></i> คำสั่งซื้อเสร็จสิ้น 
                        </h3>
                        <p>สั่งซื้อเมื่อวันที่ 9/05/2022</p>
                    </div>
                    <div class="content-bill">
                        <div class="apbill">
                            <br>
                            <h4><i class="bi bi-geo-alt"></i> ที่อยู่จัดส่ง</h4>
                            <p>ผัดไท ประตูผี</p>
                            <p>0801911150</p>
                            <p>บริษัท ABC เเห่งประเทศไทย จำกัด มหาชน</p>
                            <p>36 ซ.ผัดไท ถ.ประตูผี แขวงบางมด</p>
                            <p>เขตผัดไทจงเจริญ, จังหวัดกรุงเทพมหานคร, 36190</p>
                            <br>
                            <h4><i class="bi bi-credit-card"></i> วิธีชำระเงิน</h4>
                            <p>ชำระเงินด้วยบัตรเครดิต</p>
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
                                <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                                    <img src="images/products/40180.main.jpg" style="width: 100px; height: 80px; margin-right: 10px;">
                                    <p>RG6 Indoor CCTV Cable, white, Braid Shield aluminum 500m/Roll</p> 
                                    <span>$400.00</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                                    <img src="images/products/40180.main.jpg" style="width: 100px; height: 80px; margin-right: 10px;">
                                    <p>RG6 Indoor CCTV Cable, white, Power wire 500m/Roll</p>
                                    <span>$200.00</span>
                                </li>
                                <hr>
                                <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 ">
                                    <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                                        ค่าจัดส่ง
                                        <span>$50.00</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                                        ราคารวม
                                        <span>$650.00</span>
                                    </li>
                                </li>
                        </div>
                    </div>
                </div>

            </div>
            <div class="btns_wrap">
                <div class="common_btns form_1_btns">
                    <button type="button" class="btn_next">ดำเนินการต่อ <span class="icon"><ion-icon name="arrow-forward-sharp"></ion-icon></span></button>
                </div>
                <div class="common_btns form_2_btns" style="display: none;">
                    <button type="button" class="btn_back"><span class="icon"></span>ย้อนกลับ</button>
                    <button type="button" class="btn_next">ชำระเงิน <span class="icon"><i class="bi bi-check-lg"></i></span></button>
                </div>
                <div class="common_btns form_3_btns" style="display: none;">
                    <button type="button" class="btn_back"><span class="icon"><ion-icon name="arrow-back-sharp"></ion-icon></span>ย้อนกลับ</button>
                    <button type="submit" class="btn_done">ยืนยัน <ion-icon name="checkmark-circle-outline"></ion-icon></button>
                </div>
            </div>
    </div>
</div>



<script>
    var form_1 = document.querySelector(".form_1");
    var form_2 = document.querySelector(".form_2");
    var form_3 = document.querySelector(".form_3");
    
    
    var form_1_btns = document.querySelector(".form_1_btns");
    var form_2_btns = document.querySelector(".form_2_btns");
    var form_3_btns = document.querySelector(".form_3_btns");
    
    
    var form_1_next_btn = document.querySelector(".form_1_btns .btn_next");
    var form_2_back_btn = document.querySelector(".form_2_btns .btn_back");
    var form_2_next_btn = document.querySelector(".form_2_btns .btn_next");
    var form_3_back_btn = document.querySelector(".form_3_btns .btn_back");
    
    var form_2_progessbar = document.querySelector(".form_2_progessbar");
    var form_3_progessbar = document.querySelector(".form_3_progessbar");
    
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
    
    form_2_next_btn.addEventListener("click", function(){
        form_2.style.display = "none";
        form_3.style.display = "block";
    
        form_3_btns.style.display = "flex";
        form_2_btns.style.display = "none";
    
        form_3_progessbar.classList.add("active");
    });
    
    form_3_back_btn.addEventListener("click", function(){
        form_2.style.display = "block";
        form_3.style.display = "none";
    
        form_3_btns.style.display = "none";
        form_2_btns.style.display = "flex";
    
        form_3_progessbar.classList.remove("active");
    });
    
    btn_done.addEventListener("click", function(){
        modal_wrapper.classList.add("active");
    })
    
    shadow.addEventListener("click", function(){
        modal_wrapper.classList.remove("active");
    })
    </script>

