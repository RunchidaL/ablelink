@extends('layout.link')

@section('link_email')
    <link href="/css/email.css" rel="stylesheet">
@endsection

@section('content2')
<div class="h-screen">
    <div class="left">
        <div class="sc">
            <div class="header">
                <a href="/"><img src="/images/logoAbleLink.png"  alt=""></a>
                <span class="topic_name">| ลืมรหัสผ่าน</span>
            </div>
        </div>
        @if (session('status'))
        <div class="alert-wrap">
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        </div>
        @endif
        <div class="md-sc">
            <div class="main-form">
                <div class="message">
                    <span>กรุณาระบุอีเมลล์ที่ต้องการให้ส่งลิงค์เพื่อรีเซ็ตรหัสผ่าน</span>
                </div>
                <div class="main">
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <div class="form-group fg">
                            <label for="email">{{ __('Email Address') }}</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <span class="button">
                            <button type="submit" class="btn">ส่ง</button>
                        </span>
                    </form>
                </div>
                <div class="choice">
                    <span>You can also:</span><br>
                    <a href="{{ route('login') }}"><span>เข้าสู่ระบบ</span></a><br>
                    <a href="{{ route('register') }}"><span>สมัครบัญชีผู้ใช้งาน</span></a><br>
                    <a href="/contact"><span>ติดต่อเรา</span></a>
                </div>
            </div>
        </div>
    </div> 
    <div class="right">
        <img  src="/images/signin.png">
    </div>
</div>
@endsection