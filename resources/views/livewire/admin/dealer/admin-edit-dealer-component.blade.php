{{-- link --}}
<link href="/css/dealer/register.css" rel="stylesheet">
{{-- link --}}

<div class="container mt-1 p-5">
    <h2><a href="{{route('admin.Dealer')}}" style="color: black;"><i class="bi bi-arrow-left-circle-fill"></i></a>  Edit Dealer</h2>
    <h4>ข้อมูลส่วนตัว</h4>
    <form action="{{route('send.email')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-6 mb-3">
                <div class="form-group">
                    <label for="name">*ชื่อจริง</label>
                    <input type="text" name="name" class="form-control" required>
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <div class="form-group">
                    <label for="lname">*นามสกุล</label>
                    <input type="text" name="lname" class="form-control" required>
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <div class="form-group">
                    <label for="email">*Email</label>
                    <input type="email" name="email" class="form-control" required>
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <div class="form-group">
                    <label for="phone">*เบอร์โทรศัพท์</label>
                    <input type="text" name="phone" class="form-control" required>
                </div>
            </div>
            <h4>ที่อยู่</h4>
            <div class="form-group my-2">
                <div class="form-group">
                    <label for="address">*ที่อยู่:</label>
                    <textarea name="address" col="30" rows="2" class="form-control" placeholer="รายละเอียดที่อยู่" required></textarea>
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <div class="form-group">
                    <label for="province">*จังหวัด</label>
                    <input type="text" name="province" class="form-control" required>
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <div class="form-group">
                    <label for="district">*อำเภอ</label>
                    <input type="text" name="district" class="form-control" required>
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <div class="form-group">
                    <label for="subdistrict">*ตำบล</label>
                    <input type="text" name="subdistrict" class="form-control" required>
                </div>
            </div>
            <h4>ข้อมูลกิจการ</h4>
            <div class="col-md-6 mb-3">
                <div class="form-group">
                    <label for="companythai">*ชื่อกิจการ (ภาษาไทย)</label>
                    <input type="text" name="companythai" class="form-control" required>
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <div class="form-group">
                    <label for="companyeng">*ชื่อกิจการ (ภาษาอังกฤษ)</label>
                    <input type="text" name="companyeng" class="form-control" required>
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <div class="form-group">
                    <label for="vatid">*เลขประจำตัวผู้เสียภาษี</label>
                    <input type="text" name="vatid" class="form-control" required>
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <div class="form-group">
                    <label for="idcompany">*สำนักงานใหญ่ / รหัสสาขา</label>
                    <input type="text" name="idcompany" class="form-control" required>
                </div>
            </div>
            <h4><li>Credit</li></h4>
            <div class="col-md-6 mb-3">
                <div class="form-group">
                    <label for="file1">*Credit</label>
                    <input type="text" name="Credit" class="form-control" required>
                </div>
            </div>
        </div>
        <div style="text-align: center;" class="mt-3">
            <input type="submit" value="Submit" class="btn btn mx-auto">
        </div>
    </form>
</div>
