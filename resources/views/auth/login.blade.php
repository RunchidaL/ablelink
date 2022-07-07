@extends('layout.link')

@section('link_login')
    <link href="/css/login.css" rel="stylesheet">
@endsection

@section('content2')

<div class="row">
    <div class="col container">
        <div class="left">
            <div class="head">
                <img src="/images/logoAbleLink.png" alt="logo">
                <a>| Sign In</a>
            </div>
            <div class="con">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    @if ($message = Session::get('error'))
                        <div class="alert alert-danger alert-block">
                            <strong>{{$message}}</strong>
                        </div>
                    @endif
                    <div class="row mb-3">
                        <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>
                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>
                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                            <div class="bottom">
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                    <button type="submit" class="btn btn justify-content-md-end">{{ __('Login') }}</button> 
                                </div>
                                <br>
                                <p>New Customer?<a href="{{ route('register') }}"> Create an account</a></p>
                            </div>
                        </div> 
                    </div>
                </form>
            </div>
        </div>
    </div> 
    <div class="col" style="margin: 0; padding: 0;">
        <img src="/images/signin.png">
    </div>
</div>
@endsection
