<link href="{{asset('/css/dealer/registerproject.css')}}" rel="stylesheet">


<h1 class="mt-5" style="margin-left: 10%">ลงทะเบียนโปรเจค</h1>

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>

<div class="wrapper">
	<div class="header">
		<ul>
			<li class="active form_1_progessbar">
				<div>
					<p><b style="font-size: 25px;">1</b></p>
				</div>
			</li>
			<li class="form_2_progessbar">
				<div>
					<p><b style="font-size: 25px;">2</b></p>
				</div>
			</li>
			<li class="form_3_progessbar">
				<div>
					<p><b style="font-size: 25px;">3</b></p>
				</div>
			</li>
		</ul>
	</div>

	<div class="Test">
		<div class="row" style="margin-bottom: 40px;  text-align: center">
			<div class="col-md-3">คำแนะนำ</div>
			<div class="col-md-6">Authorized Dealer</div>
			<div class="col-md-3">Project /End-User</div>
		</div>
	</div>
	

	<form action="{{route('send.projectregister')}}" method="POST" enctype="multipart/form-data">
	<div class="form_wrap">
		<div class="form_1 data_info">
			<form>
				<div class="decription-project">
                    <b>คำแนะนำในการลงทะเบียน Project</b>
                    <p>1. กรุณากรอกข้อมูลให้ครบเพื่อความชัดเจนและความรวดเร็วในการให้บริการ</p>
                    <p>2. บริษัท เอเบิลลิ้งค์(ประเทศไทย) จำกัดขอสงวนสิทธิ์ในการตอบรับหรือปฏิเสธ การลงทะเบียนโปรเจค</p>
                </div>
			</form>
		</div>
		<div class="form_2 data_info" style="display: none;">
			<form>
				<div class="form_container">
                    <p class="head"><b>ข้อมูล Authorized Dealer</b></p> 
                    <p class="subhead">กรุณากรอกข้อมูลบริษัทตัวแทนจำหน่าย</p>
					<div class="input_wrap">
						<label for="user_name">ชื่อบริษัทตัวแทนจำหน่าย</label>
						<input type="text" name="Dealercompanyname" class="input" id="user_name">
					</div>
					<div class="input_wrap">
						<label for="first_name">ชื่อผู้ดูแลโปรเจค (Project Manager)</label>
						<input type="text" name="ProjectManager" class="input" id="first_name">
					</div>
					<div class="input_wrap">
						<label for="last_name">E-mail ผู้ดูแลโปรเจค (Project Manager)</label>
						<input type="text" name="EmailProjectManager" class="input" id="last_name">
					</div>
                    <div class="input_wrap">
						<label for="last_name">เบอร์ติดต่อ ผู้ดูแลโปรเจค (Project Manager)</label>
						<input type="text" name="TelProjectManager" class="input" id="last_name">
					</div>
				</div>
			</form>
		</div>
		<div class="form_3 data_info" style="display: none;">
			<form>
				<div class="form_container">
                    <p class="head"><b>ข้อมูล Project และ End-User</b></p> 
                    <p class="subhead">กรุณากรอกข้อมูลธุรกิจและการติดต่อเพื่อใช้พัฒนาการให้บริการ</p>
					<div class="input_wrap">
						<label for="company">ชื่อบริษัท หรือ หน่วยงาน ที่เป็นเจ้าของโครงการ</label>
						<input type="text" name="ProjectOwner" class="input" id="company">
					</div>
					<div class="input_wrap">
						<label for="experience">ชื่อโครงการ</label>
						<input type="text" name="ProjectName" class="input" id="experience">
					</div>
                    <div class="input_wrap">
                        <label for="experience">สถานะโครงการ</label>
                        <select class="form-select" aria-label="Default select example" name="projectstatus">
                            <option selected><b>-----</b></option>
                            <option value="1">สำรวจความต้องการ</option>
                            <option value="2">เตรียมเสนอราคา</option>
                            <option value="3">อนุมัติติดตั้ง</option>
                        </select>
                    </div>
					<div class="input_wrap">
                        <label for="birthday">กำหนดการในการติดตั้ง:</label>
                        <input type="date" id="birthday" name="Installationschedule" class="input">
					</div>
                    <p class="subhead">ข้อมูลผลิตภัณฑ์ที่ใช้ในโครง <br> การกรุณาให้ข้อมูลผลิตภัณฑ์เพื่อความรวดเร็วในการรับบริการ</p>
                    <div class="input_wrap">
						<label for="experience">รายการ และ จำนวน ผลิตภัณฑ์ที่ใช้ในโปรเจค</label>
						<textarea type="text" name="listproducts" class="input" id="experience" cols="30" row="10"></textarea>
					</div>
                    <div class="input_wrap">
                        <label for="experience">ลักษณะการจัดซื้อ</label>
                        <select class="form-select" aria-label="Default select example" name="Purchasingstyle">
                            <option selected><b>-----</b></option>
                            <option value="1">ครั้งเดียวทั้งหมด</option>
                            <option value="2">แบ่งเป็น LOT</option>
                        </select>
                    </div>
				</div>
			</form>
		</div>
	</div>
	<div class="btns_wrap">
		<div class="common_btns form_1_btns">
			<button type="button" class="btn_next">ไปต่อ <span class="icon"><ion-icon name="arrow-forward-sharp"></ion-icon></span></button>
		</div>
		<div class="common_btns form_2_btns" style="display: none;">
			<button type="button" class="btn_back"><span class="icon"><ion-icon name="arrow-back-sharp"></ion-icon></span>ย้อนกลับ</button>
			<button type="button" class="btn_next">ไปต่อ <span class="icon"><ion-icon name="arrow-forward-sharp"></ion-icon></span></button>
		</div>
		<div class="common_btns form_3_btns" style="display: none;">
			<button type="button" class="btn_back"><span class="icon"><ion-icon name="arrow-back-sharp"></ion-icon></span>ย้อนกลับ</button>
			<button type="submit" class="btn_done">ยืนยัน <ion-icon name="checkmark-circle-outline"></ion-icon></button>
		</div>
	</div>
</div>
</form>
<div class="modal_wrapper">
	<div class="shadow"></div>
	<div class="success_wrap">
		<span class="modal_icon"><ion-icon name="checkmark-sharp"></ion-icon></span>
		<p>ลงทะเบียนโปรเจ็คสำเร็จ.</p>
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

{{-- 
<form action="{{route('send.projectregister')}}" method="POST" enctype="multipart/form-data">
<div class="input_wrap">
	<label for="user_name">ชื่อบริษัทตัวแทนจำหน่าย</label>
	<input type="text" name="Dealercompanyname" class="input" id="user_name">
</div>
<div class="input_wrap">
	<label for="first_name">ชื่อผู้ดูแลโปรเจค (Project Manager)</label>
	<input type="text" name="ProjectManager" class="input" id="first_name">
</div>
<div class="input_wrap">
	<label for="last_name">E-mail ผู้ดูแลโปรเจค (Project Manager)</label>
	<input type="text" name="EmailProjectManager" class="input" id="last_name">
</div>
<div class="input_wrap">
	<label for="last_name">เบอร์ติดต่อ ผู้ดูแลโปรเจค (Project Manager)</label>
	<input type="text" name="TelProjectManager" class="input" id="last_name">
</div>

<div class="input_wrap">
	<label for="company">ชื่อบริษัท หรือ หน่วยงาน ที่เป็นเจ้าของโครงการ</label>
	<input type="text" name="ProjectOwner" class="input" id="company">
</div>
<div class="input_wrap">
	<label for="experience">ชื่อโครงการ</label>
	<input type="text" name="ProjectName" class="input" id="experience">
</div>
<div class="input_wrap">
	<label for="experience">สถานะโครงการ</label>
	<select class="form-select" aria-label="Default select example" name="projectstatus">
		<option selected><b>-----</b></option>
		<option value="1">สำรวจความต้องการ</option>
		<option value="2">เตรียมเสนอราคา</option>
		<option value="3">อนุมัติติดตั้ง</option>
	</select>
</div>
<div class="input_wrap">
	<label for="birthday">กำหนดการในการติดตั้ง:</label>
	<input type="date" id="birthday" name="Installationschedule" class="input">
</div>
<p class="subhead">ข้อมูลผลิตภัณฑ์ที่ใช้ในโครง <br> การกรุณาให้ข้อมูลผลิตภัณฑ์เพื่อความรวดเร็วในการรับบริการ</p>
<div class="input_wrap">
	<label for="experience">รายการ และ จำนวน ผลิตภัณฑ์ที่ใช้ในโปรเจค</label>
	<textarea type="text" name="listproducts" class="input" id="experience" cols="30" row="10"></textarea>
</div>
<div class="input_wrap">
	<label for="experience">ลักษณะการจัดซื้อ</label>
	<select class="form-select" aria-label="Default select example" name="Purchasingstyle">
		<option selected><b>-----</b></option>
		<option value="1">ครั้งเดียวทั้งหมด</option>
		<option value="2">แบ่งเป็น LOT</option>
	</select>
</div>
</form> --}}