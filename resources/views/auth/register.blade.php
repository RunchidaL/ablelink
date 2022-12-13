@extends('layout.link')

@section('link_login')
    <link href="/css/customer/register.css" rel="stylesheet">
@endsection

@section('content2')
<div class="h-screen">
    <div class="sc">
        <div class="header">
            <a href="/"><img src="/images/logoAbleLink.png"  alt=""></a>
            <span class="topic_name">| สมัครบัญชีผู้ใช้งาน</span>
        </div>
    </div>
    <div class="container d-flex justify-content-center">
        <form method="POST" action="{{route('register')}}">
            @csrf
            <div class="row">
                <div class="col-12 mb-3">
                    <div class="form-group">
                        <label for="name">{{ __('Name') }}</label>
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-12 mb-3">
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-12 mb-3">
                    <div class="form-group">
                        <label for="password">{{ __('Password') }}</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-12 mb-3">
                    <div class="form-group">
                        <label for="password-confirm">{{ __('Confirm Password') }}</label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div>                  
                <span class="button">
                    <button type="submit" class="btn">ยืนยัน</button>
                </span>
            </div>
        </form>
    </div>
    <div class="choice">
        <p>มีบัญชีอยู่แล้ว?&nbsp<a href="{{ route('login') }}"><span>เข้าสู่ระบบ</span></a></p>
        <p><i class="bi bi-dash"></i>ต้องการสมัครบัญชีสำหรับตัวแทนจำหน่าย<i class="bi bi-dash"></i></p>
        <a href="/register_dealer"><button>Dealer account</button></a>
    </div>
</div>    
@endsection