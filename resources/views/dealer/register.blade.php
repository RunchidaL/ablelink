@extends('layout.link')

@section('link_register_dealer')
    <link href="/css/dealer/register.css" rel="stylesheet">
@endsection

@section('content2')
    <div class="head">
        <a href="/"><img src="/images/logoAbleLink.png" alt="logo"></a>
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
                        <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                        <span>@error('name')กรุณาระบุชื่อจริง@enderror</span>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="form-group">
                        <label for="lname">*นามสกุล</label>
                        <input type="text" name="lname" class="form-control" value="{{ old('lname') }}">
                        <span>@error('lname')กรุณาระบุนามสกุล@enderror</span>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="form-group">
                        <label for="email">*Email</label>
                        <input type="text" name="email" class="form-control" value="{{ old('email') }}">
                        <span>@error('email')กรุณาระบุ Email @enderror</span>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="form-group">
                        <label for="phone">*เบอร์โทรศัพท์</label>
                        <input type="text" name="phone" class="form-control" value="{{ old('phone') }}">
                        <span>@error('phone')กรุณาระบุเบอร์โทรศัพท์@enderror</span>
                    </div>
                </div>
                <h4>ที่อยู่</h4>
                <div class="form-group my-2">
                    <div class="form-group">
                        <label for="address">*ที่อยู่:</label>
                        <textarea name="address" col="30" rows="2" class="form-control" placeholer="รายละเอียดที่อยู่" value="{{ old('address') }}"></textarea>
                        <span>@error('address')กรุณาระบุที่อยู่@enderror</span>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="form-group">
                        <label for="province">*จังหวัด</label>
                        <input type="text" name="province" class="form-control" value="{{ old('province') }}">
                        <span>@error('province')กรุณาระบุจังหวัด@enderror</span>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="form-group">
                        <label for="district">*อำเภอ</label>
                        <input type="text" name="district" class="form-control" value="{{ old('district') }}">
                        <span>@error('district')กรุณาระบุอำเภอ@enderror</span>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="form-group">
                        <label for="subdistrict">*ตำบล</label>
                        <input type="text" name="subdistrict" class="form-control" value="{{ old('subdistrict') }}">
                        <span>@error('subdistrict')กรุณาระบุตำบล@enderror</span>
                    </div>
                </div>
                <h4>ข้อมูลกิจการ</h4>
                <div class="col-md-6 mb-3">
                    <div class="form-group">
                        <label for="companythai">*ชื่อกิจการ (ภาษาไทย)</label>
                        <input type="text" name="companythai" class="form-control" value="{{ old('companythai') }}">
                        <span>@error('companythai')กรุณาระบุชื่อกิจการ (ภาษาไทย)@enderror</span>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="form-group">
                        <label for="companyeng">*ชื่อกิจการ (ภาษาอังกฤษ)</label>
                        <input type="text" name="companyeng" class="form-control" value="{{ old('companyeng') }}">
                        <span>@error('companyeng')กรุณาระบุชื่อกิจการ (ภาษาอังกฤษ)@enderror</span>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="form-group">
                        <label for="vatid">*เลขประจำตัวผู้เสียภาษี</label>
                        <input type="text" name="vatid" class="form-control" value="{{ old('vatid') }}">
                        <span>@error('vatid')กรุณาระบุเลขประจำตัวผู้เสียภาษี@enderror</span>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="form-group">
                        <label for="idcompany">*สำนักงานใหญ่ / รหัสสาขา</label>
                        <input type="text" name="idcompany" class="form-control" value="{{ old('idcompany') }}">
                        <span>@error('idcompany')กรุณาระบุสำนักงานใหญ่ / รหัสสาขา@enderror</span>
                    </div>
                </div>
                <h4>แนบเอกสาร</h4>
                    <div class="col-md-6 mb-3">
                        <label for="file1">*หนังสือรับรอง/ทะเบียนการค้า</label>
                        <input type="file" name="file1" class="form-control">
                        <span>@error('file1')กรุณาระบุหนังสือรับรอง/ทะเบียนการค้า@enderror</span>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="file2">*บัตรประชาชน</label>
                        <input type="file" name="file2" class="form-control">
                        <span>@error('file2')กรุณาระบุบัตรประชาชน@enderror</span>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="file3">*ภ.พ.01 หรือ ภ.พ.20</label>
                        <input type="file" name="file3" class="form-control">
                        <span>@error('file3')กรุณาระบุภ.พ.01 หรือ ภ.พ.20 @enderror</span>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="file4">งบการเงิน</label>
                        <input type="file" name="file4" class="form-control">
                        <span>@error('file4')กรุณาระบุงบการเงิน@enderror</span>
                    </div>     
                <input type="submit" value="Submit" class="btn btn mx-auto" style="margin-top: 30px;">
            </div>
        </form>
    </div>
    <div class="signin" style="margin-top:-40px">
        <p>Already have an account?<a href="{{ route('login') }}"> Sign In</a></p>
        <p><i class="bi bi-dash"></i>or create an user?<i class="bi bi-dash"></i></p>
        <a href="{{ route('register') }}"><button>User account</button></a>
    </div>
    

@endsection