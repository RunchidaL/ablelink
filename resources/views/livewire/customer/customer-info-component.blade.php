<div class="container">
    <div class="row gutters">
        <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
            <div class="card h-100">
                <div class="card-body">
                    <div class="account-settings">
                        <div class="user-profile">
                            <div class="user-avatar">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6e/Breezeicons-actions-22-im-user.svg/1200px-Breezeicons-actions-22-im-user.svg.png" alt="Maxwell Admin">
                            </div>
                            <h5 class="user-name">{{$user->name}}</h5>
                            <h6 class="user-email">{{$user->email}}</h6>
                        </div>
                        <div class="about">
                            <h5 class="mb-4" style="text-decoration: underline;"><a href="{{route('customer.info')}}"><li>ข้อมูลผู้ใช้งาน</li></a></h5>
                            <h5 class="mb-4"><a href="{{route('customer.changepassword')}}"><li>เปลี่ยนรหัสผ่าน</li></a></h5>
                            <h5 class="mb-4"><a href="{{route('customer.address')}}"><li>ที่อยู่</li></a></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-1 col-lg-1 col-md-12 col-sm-12 col-12">
            <div class="vl"></div>
        </div>
        <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12">
            @if(Session::has('message'))
            <div class='alert alert-success' role='alert'>{{Session::get('message')}}</div>
            @endif
            <form wire:submit.prevent="updateProfile">
            <div class="card h-100">
                <div class="card-body">
                    <div class="row gutters">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3">
                            <h2 class="mb-4">แก้ไขข้อมูลผู้ใช้งาน</h2>
                        </div>
                        <div class="col-xl-6 mt-2">
                            <div class="form-group">
                                <label for="name">Name :</label>
                                <input type="text" name="name" class="form-control" wire:model="name">
                            </div>
                        </div>
                        <p></p>
                        <div class="col-xl-6 mt-2">
                            <div class="form-group">
                                <label for="email">Email :</label>
                                <input type="email" name="email" class="form-control" wire:model="email" readonly>
                            </div>
                        </div>
                        <p></p>
                        <div class="col-xl-6 mt-2">
                            <div class="form-group">
                                <label for="phone">Phone Number :</label>
                                <input type="text" name="phone" class="form-control" wire:model="phonenumber">
                            </div>
                        </div>
                    </div>
                    <div class="row gutters">
                        <div class="col-xl-6 mt-4">
                            <div class="text-right">
                                <button type="submit" class="button">อัพเดต</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>

<style>
.account-settings .user-profile {
    margin: 0 0 1rem 0;
    padding-bottom: 1rem;
    text-align: center;
}
.account-settings .user-profile .user-avatar {
    margin: 0 0 1rem 0;
}
.account-settings .user-profile .user-avatar img {
    width: 90px;
    height: 90px;
    -webkit-border-radius: 100px;
    -moz-border-radius: 100px;
    border-radius: 100px;
}
.account-settings .user-profile h5.user-name {
    margin: 0 0 0.5rem 0;
}
.account-settings .user-profile h6.user-email {
    margin: 0;
    font-size: 0.8rem;
    font-weight: 400;
    color: #9fa8b9;
}
.account-settings .about {
    margin: 2rem 0 0 25%;
    text-align: start;
}
.account-settings .about h5 {
    margin: 0 0 15px 0;
    color: #007ae1;
}
.account-settings .about p {
    font-size: 0.825rem;
}
.form-control {
    border: 1px solid #cfd1d8;
    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    border-radius: 2px;
    font-size: .825rem;
    background: #ffffff;
    color: #2e323c;
}

.card {
    background: #ffffff;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
    border: 0;
    margin-bottom: 1rem;
}

.text-right {
    text-align: right!important;
}

.vl {
  border-left: 3px solid #C4C4C4;
  height: 100%;
}

.form-control{
    border-radius: 10px
}

.mb-4 :hover{
    color: rgb(90, 90, 90);
}

.button{
    border: none;
    box-shadow: 0 2px 5px rgba(136, 136, 136, 0.897);
    font-size: 16px;
    color: #FFF;
    padding: 8px 10px;
    width: 150px;
    background-color: #194276;
    border-radius: 20px;
    cursor: pointer;
    transition: all 0.3s ease;
}
.button:hover{
    background: rgb(222, 226, 236);
    color: #194276;
}

@media(max-width: 1200px){
    .account-settings .about {
        margin: 0;
        text-align: center;
    }
}

</style>
