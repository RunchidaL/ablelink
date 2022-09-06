@extends('layout.link')

@section('link_login')
    <link href="/css/login.css" rel="stylesheet">
@endsection

@section('content2')

<div class="h-screen">
    <div class="left">
        <div class="left-con">
            <div class="head">
                <a href="/"><img src="/images/logoAbleLink.png" alt="logo"></a>
                <a>| Sign In</a>
            </div>
            <div class="con">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    @if ($message = Session::get('error'))
                        <div class="alert-wrap">
                            <div class="alert alert-danger">
                                <strong>{{$message}}</strong>
                            </div>
                        </div>
                    @endif
                    <div class="mb-3">
                        <label for="email" class="col-md-4 text-md-end">Email Address</label>
                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="col-md-4 text-md-end">Password</label>
                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}" forgotPass>Forgot Your Password?</a>
                            @endif
                            <div class="botton">
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                    <button type="submit" class="btn justify-content-md-end">Login</button> 
                                </div>
                                <br>
                                <p class="underline">New Customer?&nbsp<a href="{{ route('register') }}"><span>Create an account</span></a></p>
                            </div>
                        </div> 
                    </div>
                </form> 
            </div>
        </div>  
    </div> 
    <div class="right">
        <img  src="/images/signin.png">
    </div>
</div>
@endsection