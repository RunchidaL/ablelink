<div class="container mt-1 p-5">
    <h2><a href="" style="color: black;"><i class="bi bi-arrow-left-circle-fill"></i></a>  Edit Profile</h2>
    <br>
    <form enctype="multipart/form-data" wire:submit.prevent="">
        @csrf
        <div class="row">
            <h4>ข้อมูลส่วนตัว</h4>
                <div class="col-md-6 mb-3">
                    <div class="form-group">
                        <label for="name">ชื่อจริง</label>
                        <input type="text" name="name" class="form-control"  wire:model="firstname" required>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="form-group">
                        <label for="lname">นามสกุล</label>
                        <input type="text" name="lname" class="form-control"  wire:model="lastname" required>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control"  wire:model="emailaddress" required>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="form-group">
                        <label for="phone">เบอร์โทรศัพท์</label>
                        <input type="text" name="phone" class="form-control"  wire:model="phonenumber" required>
                    </div>
                </div>
            <h4>ที่อยู่</h4>
                <div class="form-group my-2">
                    <div class="form-group">
                        <label for="address">ที่อยู่:</label>
                        <textarea name="address" col="30" rows="5" class="form-control" placeholer="รายละเอียดที่อยู่"  wire:model="address" required></textarea>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="form-group">
                        <label for="subdistrict">ตำบล</label>
                        <input type="text" name="subdistrict" class="form-control"  wire:model="subdistrict" required>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="form-group">
                        <label for="district">อำเภอ</label>
                        <input type="text" name="district" class="form-control"  wire:model="district" required>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="form-group">
                        <label for="county">จังหวัด</label>
                        <input type="text" name="county" class="form-control"  wire:model="county" required>
                    </div>
                </div>
                
                <div class="col-md-6 mb-3">
                    <div class="form-group">
                        <label for="zipcod">รหัสไปรษณีย์</label>
                        <input type="text" name="zipcode" class="form-control"  wire:model="zipcode" required>
                    </div>
                </div>
            <h4>ข้อมูลกิจการ</h4>
                <div class="col-md-6 mb-3">
                    <div class="form-group">
                        <label for="companythai">ชื่อกิจการ (ภาษาไทย)</label>
                        <input type="text" name="companythai" class="form-control"  wire:model="companyTH" required>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="form-group">
                        <label for="companyeng">ชื่อกิจการ (ภาษาอังกฤษ)</label>
                        <input type="text" name="companyeng" class="form-control"  wire:model="companyEN" required>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="form-group">
                        <label for="taxid">เลขประจำตัวผู้เสียภาษี</label>
                        <input type="text" name="taxid" class="form-control"  wire:model="taxid" required>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="form-group">
                        <label for="idcompany">สำนักงานใหญ่ / รหัสสาขา</label>
                        <input type="text" name="idcompany" class="form-control"  wire:model="idcompany" required>
                    </div>
                </div>
            <h4 class="mt-3"><li>Change Password</li></h4>
                <div class="col-md-6 mb-3">
                    <div class="form-group">
                        <label for="coin">*Current password</label>
                        <input type="text" name="Current password" class="form-control"  wire:model="coin" required>
                    </div>
                </div>
                <p></p>
                <div class="col-md-6 mb-3">
                    <div class="form-group">
                        <label for="coin">*New password</label>
                        <input type="text" name="New password" class="form-control"  wire:model="coin" required>
                    </div>
                </div>
                <p></p>
                <div class="col-md-6 mb-3">
                    <div class="form-group">
                        <label for="coin">*Comfirm password</label>
                        <input type="text" name="Comfirm password" class="form-control"  wire:model="coin" required>
                    </div>
                </div>
                <div style="text-align: center" class="mt-3">
                    <input type="submit" value="Submit" class="btn btn-light " style="background: #194276; color: white;">
                </div>
        </div>
    </form>
    <br>
    @if(Session::has('message'))
        <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
    @endif
</div>
