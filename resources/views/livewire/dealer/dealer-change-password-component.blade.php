{{-- <div>
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2><a href="{{route('dealer.changeinfo')}}" style="color: black;"><i class="bi bi-arrow-left-circle-fill"></i></a>  Change Password</h2>
                    </div>
                    <div class="panel-body">
                        @if(Session::has('password_success'))
                            <div class="alert alert-success" role="alert">{{Session::get('password_success')}}</div>
                        @endif
                        @if(Session::has('password_error'))
                            <div class="alert alert-danger" role="alert">{{Session::get('password_error')}}</div>
                        @endif
                        <form class="form-horizontal" wire:submit.prevent="changePassword">
                            <div class="form-group">
                                <label class="col-md-12 mt-5 mb-1 control-label"><h4><li>Current Password</li></h4></label>
                                <div class="col-md-12">
                                    <input type="password" placeholder="Current Password" class="form-control input-md" name="current_password" wire:model="current_password"/>
                                    @error('current_password') <p class="text-danger">{{$message}}</p> @enderror 
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 mt-3 mb-1 control-label"><h4><li>New Password</li></h4></label>
                                <div class="col-md-12">
                                    <input type="password" placeholder="New Password" class="form-control input-md" name="password" wire:model="password"/>
                                    @error('password') <p class="text-danger">{{$message}}</p> @enderror 
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 mt-3 mb-1 control-label"><h4><li>Confirm Password</li></h4></label>
                                <div class="col-md-12">
                                    <input type="password" placeholder="Confirm Password" class="form-control input-md" name="password_confirmation" wire:model="password_confirmation"/>
                                    @error('password_confirmation') <p class="text-danger">{{$message}}</p> @enderror 
                                </div>
                            </div>
                            <div style="text-align: center">
                                <label class="col-md-4 control-label"></label>
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-info" style="color: white; background: #194276">Update Password</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
            


<div class="mainDiv">
    <div class="cardStyle">
        @if(Session::has('password_success'))
            <div class="alert alert-success" role="alert"><p style="text-align: center">{{Session::get('password_success')}}</p></div>
        @endif
        @if(Session::has('password_error'))
            <div class="alert alert-danger" role="alert"><p style="text-align: center">{{Session::get('password_error')}}</p></div>
        @endif
        <form  name="signupForm" id="signupForm" wire:submit.prevent="changePassword">
            <img src="/images/key.jpg" id="signupLogo"/>
            <h1 class="formTitle">
                Change Password
            </h1>
            <div class="inputDiv">
                <label class="inputLabel" for="Current_password">Current Password</label>
                <input type="password" id="password" name="Current_password" wire:model="current_password"/>
                @error('current_password') <p class="text-danger">{{$message}}</p> @enderror 
            </div>  
            <div class="inputDiv">
                <label class="inputLabel" for="password">New Password</label>
                <input type="password" id="password" name="password" wire:model="password"/>
                @error('password') <p class="text-danger">{{$message}}</p> @enderror 
            </div>
            <div class="inputDiv">
                <label class="inputLabel" for="confirmPassword">Confirm Password</label>
                <input type="password" id="confirmPassword" name="confirmPassword" wire:model="password_confirmation"/>
                @error('password_confirmation') <p class="text-danger">{{$message}}</p> @enderror 
            </div>
            <div class="buttonWrapper">
                <button type="submit" id="submitButton" onclick="validateSignupForm()" class="submitButton pure-button pure-button-primary">
                    <span style="font-size: 16px;">Update Password</span>
                </button>
            </div>
        </form>
        <h6 class="mt-3" style="text-align: center" ><a href="{{route('dealer.changeinfo')}}">Back</a></h6>
    </div>
</div>


<style>
.mainDiv {
    display: flex;
    min-height: 100%;
    align-items: center;
    justify-content: center;
    
}
.cardStyle {
    width: 500px;
    border-color: white;
    background: #fff;
    padding: 36px 0;
    border-radius: 4px;
    margin: 30px 0;
    
}
#signupLogo {
    max-height: 150px;
    margin: auto;
    display: flex;
    flex-direction: column;
}
.formTitle{
    font-weight: 600;
    margin-top: 20px;
    color: #2F2D3B;
    text-align: center;
}
.inputLabel {
    font-size: 16px;
    color: #555;
    margin-bottom: 6px;
    margin-top: 24px;
}
.inputDiv {
    width: 70%;
    display: flex;
    flex-direction: column;
    margin: auto;
}
input {
    height: 40px;
    font-size: 16px;
    border-radius: 4px;
    border: none;
    border: solid 1px #ccc;
    padding: 0 11px;
}
input:disabled {
    cursor: not-allowed;
    border: solid 1px #eee;
}
.buttonWrapper {
    margin-top: 40px;
}
.submitButton {
    width: 70%;
    height: 40px;
    margin: auto;
    display: block;
    color: #fff;
    background-color: #065492;
    border-color: #065492;
    text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.12);
    box-shadow: 0 2px 0 rgba(0, 0, 0, 0.035);
    border-radius: 4px;
    font-size: 14px;
    cursor: pointer;
}
.submitButton:disabled,
button[disabled] {
    border: 1px solid #cccccc;
    background-color: #cccccc;
    color: #666666;
}

#loader {
    position: absolute;
    z-index: 1;
    margin: -2px 0 0 10px;
    border: 4px solid #f3f3f3;
    border-radius: 50%;
    border-top: 4px solid #666666;
    width: 14px;
    height: 14px;
    -webkit-animation: spin 2s linear infinite;
    animation: spin 2s linear infinite;
}

.mt-3 a:hover{
    color: #555;
    text-decoration:underline;
}

@keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}
</style>

