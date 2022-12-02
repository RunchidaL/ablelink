{{-- link --}}
<link href="{{asset('css/dealer/registerproject.css')}}" rel="stylesheet">
{{-- link --}}
<h1 class="mt-5" style="margin-left: 10%">ลงทะเบียนโปรเจค</h1>
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
	<form action="{{route('registerproject.email')}}" id="form" method="POST" enctype="multipart/form-data">
	@csrf
	<div class="form_wrap">
		<div class="form_1 data_info">
			<div class="step">
				<h2>คำแนะนำ</h2>
			</div>
			@if ($errors->any())
			<div class="step">
				<h4>! กรุณาระบุข้อมูลให้ครบถ้วน !</h4>
			</div>
			@endif
			<div class="decription-project">
				<b>คำแนะนำในการลงทะเบียน Project</b>
				<p>1. กรุณากรอกข้อมูลให้ครบเพื่อความชัดเจนและความรวดเร็วในการให้บริการ</p>
				<p>2. บริษัท เอเบิลลิ้งค์(ประเทศไทย) จำกัดขอสงวนสิทธิ์ในการตอบรับหรือปฏิเสธ การลงทะเบียนโปรเจค</p>
			</div>
		</div>
		<div class="form_2 data_info" style="display: none;">
			<div class="step">
				<h2>Authorized Dealer</h2>
			</div>
				<div class="form_container">
                    <p class="head"><b>ข้อมูล Authorized Dealer</b></p> 
                    <p class="subhead">กรุณากรอกข้อมูลบริษัทตัวแทนจำหน่าย</p>
					<div class="form-control">
						<label for="Dealercompanyname">ชื่อบริษัทตัวแทนจำหน่าย</label>
						<input type="text" name="Dealercompanyname" class="input" id="Dealercompanyname" value="{{ old('Dealercompanyname') }}" wire:model="Dealercompanyname">
						<span>@error('Dealercompanyname')กรุณาระบุชื่อบริษัทตัวแทนจำหน่าย@enderror</span>
					</div>
					<div class="form-control">
						<label for="ProjectManager">ชื่อผู้ดูแลโปรเจค (Project Manager)</label>
						<input type="text" name="ProjectManager" class="input" id="ProjectManager" value="{{ old('ProjectManager') }}" wire:model="ProjectManager">
						<span>@error('ProjectManager')กรุณาระบุชื่อผู้ดูแลโปรเจค (Project Manager)@enderror</span>
					</div>
					<div class="form-control">
						<label for="EmailProjectManager">E-mail ผู้ดูแลโปรเจค (Project Manager)</label>
						<input type="text" name="EmailProjectManager" class="input" id="EmailProjectManager" value="{{ old('EmailProjectManager') }}" wire:model="EmailProjectManager">
						<span>@error('EmailProjectManager')กรุณาระบุ E-mail ผู้ดูแลโปรเจค (Project Manager)@enderror</span>
					</div>
                    <div class="form-control">
						<label for="TelProjectManager">เบอร์ติดต่อผู้ดูแลโปรเจค (Project Manager)</label>
						<input type="text" name="TelProjectManager" class="input" id="TelProjectManager" value="{{ old('TelProjectManager') }}" wire:model="TelProjectManager">
						<span>@error('TelProjectManager')กรุณาระบุ เบอร์ติดต่อ ผู้ดูแลโปรเจค (Project Manager)@enderror</span>
					</div>
				</div>
		</div>
		<div class="form_3 data_info" style="display: none;">
			<div class="step">
				<h2>Project/End-User</h2>
			</div>
				<div class="form_container">
                    <p class="head"><b>ข้อมูล Project และ End-User</b></p> 
                    <p class="subhead">กรุณากรอกข้อมูลธุรกิจและการติดต่อเพื่อใช้พัฒนาการให้บริการ</p>
					<div class="form-control">
						<label for="ProjectOwner">ชื่อบริษัทหรือหน่วยงานที่เป็นเจ้าของโครงการ</label>
						<input type="text" name="ProjectOwner" class="input" id="ProjectOwner" value="{{ old('ProjectOwner') }}" wire:model="ProjectOwner">
						<span>@error('ProjectOwner')กรุณาระบุชื่อบริษัทหรือหน่วยงานที่เป็นเจ้าของโครงการ@enderror</span>
					</div>
					<div class="form-control">
						<label for="ProjectName">ชื่อโครงการ</label>
						<input type="text" name="ProjectName" class="input" id="ProjectName" value="{{ old('ProjectName') }}" wire:model="ProjectName">
						<span>@error('ProjectName')กรุณาระบุชื่อโครงการ@enderror</span>
					</div>
                    <div class="form-control">
                        <label for="projectstatus">สถานะโครงการ</label>
                        <select class="form-select" aria-label="Default select example" name="projectstatus" id="projectstatus" value="{{ old('projectstatus') }}" wire:model="projectstatus">
                            <option value=""><b>-----</b></option>
                            <option value="สำรวจความต้องการ">สำรวจความต้องการ</option>
                            <option value="เตรียมเสนอราคา">เตรียมเสนอราคา</option>
                            <option value="อนุมัติติดตั้ง">อนุมัติติดตั้ง</option>
                        </select>
						<span>@error('projectstatus')กรุณาระบุสถานะโครงการ@enderror</span>
                    </div>
					<div class="form-control">
                        <label for="Installationschedule">กำหนดการในการติดตั้ง:</label>
						<input type="date" id="Installationschedule" name="Installationschedule" class="input" value="{{ old('Installationschedule') }}" wire:model="Installationschedule">
						<span>@error('Installationschedule')กรุณาระบุกำหนดการในการติดตั้ง@enderror</span>
					</div>
                    <p class="subhead">ข้อมูลผลิตภัณฑ์ที่ใช้ในโครง <br> การกรุณาให้ข้อมูลผลิตภัณฑ์เพื่อความรวดเร็วในการรับบริการ</p>
                    <div class="form-control">
						<label for="listproducts">รายการและจำนวนผลิตภัณฑ์ที่ใช้ในโปรเจค</label>
						<textarea type="text" name="listproducts" class="input" id="listproducts" value="{{ old('listproducts') }}" cols="30" row="10" wire:model="listproducts"></textarea>
						<span>@error('listproducts')กรุณาระบุรายการและจำนวนผลิตภัณฑ์ที่ใช้ในโปรเจค@enderror</span>
					</div>
                    <div class="form-control">
                        <label for="Purchasingstyle">ลักษณะการจัดซื้อ</label>
                        <select class="form-select" aria-label="Default select example" name="Purchasingstyle" id="Purchasingstyle" value="{{ old('Purchasingstyle') }}"wire:model="Purchasingstyle">
                            <option value="" ><b>-----</b></option>
                            <option value="ครั้งเดียวทั้งหมด">ครั้งเดียวทั้งหมด</option>
                            <option value="แบ่งเป็น LOT">แบ่งเป็น LOT</option>
                        </select>
						<span>@error('Purchasingstyle')กรุณาระบุลักษณะการจัดซื้อ@enderror</span>
                    </div>
				</div>
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
	</form>
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