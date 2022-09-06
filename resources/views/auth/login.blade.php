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
            <span class="topic_name">| Sign In</span>
        </div>
        </div>
        <div class="container d-flex justify-content-center">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                @if ($message = Session::get('error'))
                    <div class="alert-wrap">
                        <div class="alert alert-danger">
                            <strong>{{$message}}</strong>
                        </div>
                    </div>
                @endif
                <div class="row">
                    <div class="col-12 mb-3">
                        <div class="form-group">
                            <label for="email">{{ __('Email Address') }}</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
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
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}" forgotPass>Forgot Your Password?</a>
                            @endif
                        </div>
                    </div>
                    <div class="button">
                        <button type="submit" class="btn">{{ __('Login') }}</button> 
                    </div>
                </div>
            </form> 
        </div>
        <div class="choice">
            <p>New Customer?&nbsp<a href="{{ route('register') }}"><span>Create an account</span></a></p>
        </div>
    </div> 
    <div class="right">
        <img  src="/images/signin.png">
    </div>
</div>
@endsection