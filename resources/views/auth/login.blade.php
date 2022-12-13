@extends('layout.link')

@section('link_login')
    <link href="/css/login.css" rel="stylesheet">
@endsection

@section('content2')
<div class="h-screen">
    <div class="left">
        <div class="sc">
            <div class="header">
                <a href="/"><img src="/images/logoAbleLink.png"  alt=""></a>
                <span class="topic_name">| เข้าสู่ระบบ</span>
            </div>
        </div>
        @if ($message = Session::get('error'))
            <div class="alert-wrap">
                <div class="alert alert-danger">
                    {{$message}}
                </div>
            </div>
        @endif
        <div class="md-sc">
            <div class="main-form">
                <div class="main">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group fg">
                            <label for="email">{{ __('Email Address') }}</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div> 
                        <div class="form-group fg">
                            <label for="password">{{ __('Password') }}</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}" forgotPass>ลืมรหัสผ่าน?</a>
                            @endif
                        </div>
                        <span class="button">
                            <button type="submit" class="btn">เข้าสู่ระบบ</button> 
                        </span>
                    </form> 
                </div>
                <div class="choice">
                    <p>New Customer?&nbsp<a href="{{ route('register') }}"><span>สมัครใช้งาน</span></a></p>
                </div>
            </div>
        </div>
    </div> 
    <div class="right">
        <img  src="/images/signin.png">
    </div>
</div>
@endsection