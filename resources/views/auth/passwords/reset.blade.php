@extends('layout.link')

@section('link_reset')
    <link href="/css/reset.css" rel="stylesheet">
@endsection

@section('content2')
<div class="h-screen">
    <div class="sc">
        <div class="header">
            <a href="/"><img src="/images/logoAbleLink.png"  alt=""></a>
            <span class="topic_name">| รีเซ็ตรหัสผ่าน</span>
        </div>
    </div>
    <div class="container d-flex justify-content-center">
        <form method="POST" action="{{ route('password.update') }}">
            @csrf
            <input type="hidden" name="token" value="{{ $token }}">
            <div class="row">
                <div class="col-12 mb-3">
                    <div class="form-group">
                        <label for="email">{{ __('Email Address') }}</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-12 mb-3">
                    <div class="form-group">
                        <label for="password">{{ __('New Password') }}</label>
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
            </form>
        </div>
    </div>
</div>    
@endsection