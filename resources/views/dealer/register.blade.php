@extends('layout.link')

@section('link_register_dealer')
    <link href="/css/dealer/register.css" rel="stylesheet">
@endsection

@section('content2')
    <div class="head">
        <img src="/images/logoAbleLink.png" alt="logo">
        <a>| Create a dealer account</a>
    </div>

    <div class="container mt-1 p-5">
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
                <h4>แนบเอกสาร</h4>
                    <div class="col-md-6 mb-3">
                        <label for="file1">*หนังสือรับรอง/ทะเบียนการค้า</label>
                        <input type="file" name="file1" class="form-control" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="file2">*บัตรประชาชน</label>
                        <input type="file" name="file2" class="form-control" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="file3">*ภ.พ.01 หรือ ภ.พ.20</label>
                        <input type="file" name="file3" class="form-control" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="file4">งบการเงิน</label>
                        <input type="file" name="file4" class="form-control">
                    </div>
                
                <input type="submit" value="Submit" class="btn btn mx-auto">
            </div>
        </form>
    </div>
    <div class="signin">
        <p>Already have an account?<a href="{{ route('login') }}"> Sign In</a></p>
        <p><i class="bi bi-dash"></i>or create an user?<i class="bi bi-dash"></i></p>
        <a href="{{ route('register') }}"><button>User account</button></a>
    </div>
    

@endsection

