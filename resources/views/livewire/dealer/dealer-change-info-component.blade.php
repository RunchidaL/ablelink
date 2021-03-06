<div style="text-align: center; margin-top: 3%;">
    <span style="background: #194276; box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1); color: white; font-size: 200%; padding: 1%; border-radius: 20px">
    ข้อมูลของบริษัท {{$user->Dealer->companyTH}}
    </span>
</div>

<div class="container mt-1 p-5">
    <div class="row">
        <div class="col-md-4">
            <h4><li>ข้อมูลส่วนตัว</li></h4>
        </div>
        <div class="col-md-4 gap-2 offset-md-4 d-md-flex justify-content-md-end">
            <a href="{{route('dealer.changepassword')}}"><button class="btn btn-info" style="color: white; background: #194276">เปลี่ยนรหัสผ่าน</button></a>
        </div>
    </div>

    <form action="" method="" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-6 mb-3">
                <div class="form-group">
                    <label for="name">*ชื่อจริง</label>
                    <input type="text" name="name" class="form-control" placeholder="{{$user->Dealer->firstname}}" /readonly>
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <div class="form-group">
                    <label for="lname">*นามสกุล</label>
                    <input type="text" name="lname" class="form-control" placeholder="{{$user->Dealer->lastname}}" /readonly>
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <div class="form-group">
                    <label for="email">*Email</label>
                    <input type="email" name="email" class="form-control" placeholder="{{$user->Dealer->emailaddress}}" /readonly>
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <div class="form-group">
                    <label for="phone">*เบอร์โทรศัพท์</label>
                    <input type="text" name="phone" class="form-control" placeholder="{{$user->Dealer->phonenumber}}" /readonly>
                </div>
            </div>
            <h4 style="margin-top: 2%"><li>ที่อยู่</li></h4>
            <div class="form-group my-2">
                <div class="form-group">
                    <label for="address">*ที่อยู่:</label>
                    <input type="text" name="phone" class="form-control" placeholder="{{$user->Dealer->address}}" /readonly>
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <div class="form-group">
                    <label for="subdistrict">*ตำบล</label>
                    <input type="text" name="subdistrict" class="form-control" placeholder="{{$user->Dealer->subdistrict}}" /readonly>
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <div class="form-group">
                    <label for="district">*อำเภอ</label>
                    <input type="text" name="district" class="form-control" placeholder="{{$user->Dealer->district}}" /readonly>
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <div class="form-group">
                    <label for="province">*จังหวัด</label>
                    <input type="text" name="province" class="form-control" placeholder="{{$user->Dealer->county}}" /readonly>
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <div class="form-group">
                    <label for="zipcode">*รหัสไปรษณีย์</label>
                    <input type="text" name="zipcode" class="form-control" placeholder="{{$user->Dealer->zipcode}}" /readonly>
                </div>
            </div>
            <h4 style="margin-top: 2%"><li>ข้อมูลกิจการ</li></h4>
            <div class="col-md-6 mb-3">
                <div class="form-group">
                    <label for="companythai">*ชื่อกิจการ (ภาษาไทย)</label>
                    <input type="text" name="companythai" class="form-control" placeholder="{{$user->Dealer->companyTH}}" /readonly>
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <div class="form-group">
                    <label for="companyeng">*ชื่อกิจการ (ภาษาอังกฤษ)</label>
                    <input type="text" name="companyeng" class="form-control" placeholder="{{$user->Dealer->companyEN}}" /readonly>
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <div class="form-group">
                    <label for="vatid">*เลขประจำตัวผู้เสียภาษี</label>
                    <input type="text" name="vatid" class="form-control" placeholder="{{$user->Dealer->taxid}}" /readonly>
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <div class="form-group">
                    <label for="idcompany">*สำนักงานใหญ่ / รหัสสาขา</label>
                    <input type="text" name="idcompany" class="form-control" placeholder="{{$user->Dealer->idcompany}}" /readonly>
                </div>
            </div>
            <h4 style="margin-top: 2%"><li>Credit คงเหลือ</li></h4>
            <div class="col-md-6 mb-3">
                <div class="form-group">
                    <label for="coin">*Credit</label>
                    <input type="text" name="coin" class="form-control" placeholder="{{$user->Dealer->coin}} บาท" /readonly>
                </div>
            </div>
        </div>
    </form>
</div>




