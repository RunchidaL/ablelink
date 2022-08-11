<form action="{{route('registerproject.email')}}" method="POST"> 
	@csrf
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
			<option value="สำรวจความต้องการ">สำรวจความต้องการ</option>
			<option value="เตรียมเสนอราคา">เตรียมเสนอราคา</option>
			<option value="อนุมัติติดตั้ง">อนุมัติติดตั้ง</option>
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
			<option value="ครั้งเดียวทั้งหมด">ครั้งเดียวทั้งหมด</option>
			<option value="แบ่งเป็น LOT">แบ่งเป็น LOT</option>
		</select>
	</div>
	<button type="submit">ยืนยัน </button>
</form> 