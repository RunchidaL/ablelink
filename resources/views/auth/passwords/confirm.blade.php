@extends('layout.link')

@section('link_confirm')
    <link href="/css/confirm.css" rel="stylesheet">
@endsection

@section('content2')
<div class="h-screen">
    <div class="sc">
        <div class="header">
            <a href="/"><img src="/images/logoAbleLink.png"  alt=""></a>
            <span class="topic_name">| Confirm Password</span>
        </div>
    </div>
    <div class="md-sc">
        <div class="main-form">
            <div class="message">
                <span>Please confirm your password before continuing.</span>
            </div>
            <div class="main">
                <form method="POST" action="{{ route('password.confirm') }}">
                    @csrf
                    <div class="form-group fg">
                        <label for="password">{{ __('Password') }}</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        @if (Route::has('password.request'))
                        <a class="btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                        @endif
                    </div>
                    <span class="button">
                        <button type="submit" class="btn">{{ __('Submit') }}</button>
                    </span>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
