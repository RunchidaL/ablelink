<div class="container mt-1 p-5">
    <div class="row">
        <div class="col-md-4">
            <h2><a href="{{route('admin.Dealer')}}" style="color: black;"><i class="bi bi-arrow-left-circle-fill"></i></a>  Edit Info Dealer</h2>
        </div>
        <div class="col-md-4 gap-2 offset-md-4 d-md-flex justify-content-md-end">
            <a href="{{route('admin.salehis',['dealer_id'=>$dealer->dealerid])}}"><button class="btn btn-success">Sale History</button></a>
        </div>
    </div>
    <br>
    <form enctype="multipart/form-data" wire:submit.prevent="addDealerinfo">
        @csrf
        <div class="row">
            <h4><li>Dealer_ID</li> </h4>
                <div class="col-md-6 mb-3">
                    <div class="form-group">
                        <label for="dealerid">*Dealer_Id</label>
                        <input type="text" name="dealerid" class="form-control" list="datalistOptions" wire:model="dealerid">
                        <datalist id="datalistOptions">
                            @foreach($users as $user)
                                <option value="{{$user->id}}">{{$user->name}}</option>
                            @endforeach
                        </datalist>
                        @error('dealerid') <p class="text-danger">{{ $message }}</p> @enderror
                    </div>
                </div>
            <h4><li>Credit</li></h4>
                <div class="col-md-6 mb-3">
                    <div class="form-group">
                        <label for="coin">*Credit</label>
                        <input type="text" name="Credit" class="form-control"  wire:model="coin">
                        @error('coin') <p class="text-danger">กรุณาใส่</p> @enderror
                    </div>
                </div>
            <h4>ข้อมูลส่วนตัว</h4>
                <div class="col-md-6 mb-3">
                    <div class="form-group">
                        <label for="name">*ชื่อจริง</label>
                        <input type="text" name="name" class="form-control"  wire:model="firstname">
                        @error('firstname') <p class="text-danger">กรุณาใส่</p> @enderror
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="form-group">
                        <label for="lname">*นามสกุล</label>
                        <input type="text" name="lname" class="form-control"  wire:model="lastname">
                        @error('lastname') <p class="text-danger">กรุณาใส่</p> @enderror
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="form-group">
                        <label for="email">*Email</label>
                        <input type="email" name="email" class="form-control"  wire:model="emailaddress">
                        @error('emailaddress') <p class="text-danger">กรุณาใส่ E-mail</p> @enderror
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="form-group">
                        <label for="phone">*เบอร์โทรศัพท์</label>
                        <input type="text" name="phone" class="form-control"  wire:model="phonenumber">
                        @error('phonenumber') <p class="text-danger">กรุณาใส่</p> @enderror
                    </div>
                </div>
            <h4>ที่อยู่</h4>
                <div class="form-group my-2">
                    <div class="form-group">
                        <label for="address">*ที่อยู่:</label>
                        <textarea name="address" col="30" rows="5" class="form-control" placeholer="รายละเอียดที่อยู่"  wire:model="address"></textarea>
                        @error('address') <p class="text-danger">กรุณาใส่</p> @enderror
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="form-group">
                        <label for="subdistrict">*ตำบล</label>
                        <input type="text" name="subdistrict" class="form-control"  wire:model="subdistrict">
                        @error('subdistrict') <p class="text-danger">กรุณาใส่</p> @enderror
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="form-group">
                        <label for="district">*อำเภอ</label>
                        <input type="text" name="district" class="form-control"  wire:model="district">
                        @error('district') <p class="text-danger">กรุณาใส่</p> @enderror
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="form-group">
                        <label for="county">*จังหวัด</label>
                        <input type="text" name="county" class="form-control"  wire:model="county">
                        @error('county') <p class="text-danger">กรุณาใส่</p> @enderror
                    </div>
                </div>
                
                <div class="col-md-6 mb-3">
                    <div class="form-group">
                        <label for="zipcod">*รหัสไปรษณีย์</label>
                        <input type="text" name="zipcode" class="form-control"  wire:model="zipcode">
                        @error('zipcode') <p class="text-danger">กรุณาใส่</p> @enderror
                    </div>
                </div>
            <h4>ข้อมูลกิจการ</h4>
                <div class="col-md-6 mb-3">
                    <div class="form-group">
                        <label for="companythai">*ชื่อกิจการ (ภาษาไทย)</label>
                        <input type="text" name="companythai" class="form-control"  wire:model="companyTH">
                        @error('companyTH') <p class="text-danger">กรุณาใส่</p> @enderror
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="form-group">
                        <label for="companyeng">*ชื่อกิจการ (ภาษาอังกฤษ)</label>
                        <input type="text" name="companyeng" class="form-control"  wire:model="companyEN">
                        @error('companyEN') <p class="text-danger">กรุณาใส่</p> @enderror
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="form-group">
                        <label for="taxid">*เลขประจำตัวผู้เสียภาษี</label>
                        <input type="text" name="taxid" class="form-control"  wire:model="taxid">
                        @error('taxid') <p class="text-danger">กรุณาใส่</p> @enderror
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="form-group">
                        <label for="idcompany">*สำนักงานใหญ่ / รหัสสาขา</label>
                        <input type="text" name="idcompany" class="form-control"  wire:model="idcompany">
                        @error('idcompany') <p class="text-danger">กรุณาใส่</p> @enderror
                    </div>
                </div>
                <div style="text-align: center" class="mt-3">
                    <input type="submit" value="Submit" class="btn btn-success ">
                </div>
        </div>
    </form>
    <br>
    @if(Session::has('message'))
        <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
    @endif
</div>
