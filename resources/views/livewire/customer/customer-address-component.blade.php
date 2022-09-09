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
                            <h5 class="mb-4"><a href="{{route('customer.info')}}"><li>User Profile</li></a></h5>
                            <h5 class="mb-4"><a href="{{route('customer.changepassword')}}"><li>Change Password</li></a></h5>
                            <h5 class="mb-4" style="text-decoration: underline;"><a href="{{route('customer.address')}}"><li>Change Address</li></a></h5>
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
                        <div class="col-md-6 ">
                            <h2 class="mb-4">User Profile</h2>
                        </div>
                        <div class="col-md-6 mb-4">
                            <a href="{{route('customer.addaddress')}}"><button type="button" class="button">Add Address</button></a>
                        </div>
                    </div>
                    @php
                        $i=0;
                    @endphp
                    @foreach ($customeraddress as $customeraddresses)
                        @if($customeraddresses->customerid == $user->id)
                            @php
                                $i++;
                            @endphp
                        <div class="col-md-4 mb-5">
                            <div class="form-group" style="background: rgb(240, 240, 240); border-radius: 20px; box-shadow: 5px 5px 10px 1px #929292; padding: 3% 5% 3% 5%">
                                <h3 style="display: flex; justify-content: space-between;">
                                    <div>
                                        Address {{$i}}
                                    </div>
                                    <div>          
                                        <a href="{{route('customer.editaddress',['address_id'=>$customeraddresses->id])}}"><i class="bi bi-pencil-square" id="editsub"></i></a>
                                        <a href="#" onclick="confirm('Are you sure?') || event.stopImmediatePropagation()" wire:click.prevent="deleteAddress({{$customeraddresses->id}})"><i class="bi bi-x" id="editsub"></i></a>
                                    </div>
                                </h3>
                                <p>ชื่อจริง : {{$customeraddresses->firstname}}</p>
                                <p>นามสกุล : {{$customeraddresses->lastname}}</p>
                                <p>ที่อยู่ : {{$customeraddresses->address}}</p>
                                <p>ตำบล : {{$customeraddresses->subdistrict}}</p>
                                <p>อำเภอ : {{$customeraddresses->district}}</p>
                                <p>จังหวัด : {{$customeraddresses->county}}</p>
                                <p>รหัสไปรษณีย์ : {{$customeraddresses->zipcode}}</p>
                                <p>Phonenumber : {{$customeraddresses->phonenumber}}</p>
                            </div>
                        </div>
                        @endif
                    @endforeach
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
</style>
