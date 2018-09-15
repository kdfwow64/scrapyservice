@extends('layouts.app')

@section('content')
<div class="mh-fullscreen bg-img center-vh p-20" style="background: linear-gradient(135deg, #6c03a0 0%,#24005e 100%);">
    <div class="card card-shadowed p-50 w-400 mb-0" style="max-width: 100%">
        <h5 class="text-uppercase text-center">Login</h5>
        <br><br>

        <form class="form-horizontal" method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}
            <div class="form-group">
                <input id="email" type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}">
            </div>
            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif

            <div class="form-group">
                <input type="password" id="password" class="form-control" placeholder="Password" name="password" required>
            </div>

            <div class="form-group flexbox py-10">
                <label class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" name="remember" {{ old('remember') ? 'checked' : '' }}>
                <span class="custom-control-indicator"></span>
                <span class="custom-control-description">Remember me</span>
                </label>

                <a class="text-muted hover-primary fs-13" href="{{ route('password.request') }}">Forgot password?</a>
            </div>

            <div class="form-group">
                <button class="btn btn-bold btn-block btn-primary" type="submit">Login</button>
            </div>
        </form>

        <hr class="w-30">

        <p class="text-center text-muted fs-13 mt-20">Don't have an account? <a href="{{ route('register') }}">Sign up</a></p>
    </div>
</div>
@endsection
