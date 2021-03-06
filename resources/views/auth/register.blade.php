@extends('layouts.app')

@section('content')
<div class="mh-fullscreen bg-img center-vh p-20" style="background: linear-gradient(135deg, #6c03a0 0%,#24005e 100%);">
    <div class="card card-shadowed p-50 w-400 mb-0" style="max-width: 100%">
        <h5 class="text-uppercase text-center">Register</h5>
        <br><br>

        <form class="form-type-material" method="POST" action="{{ route('register') }}">
            {{ csrf_field() }}
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Username" name="name" value="{{ old('name') }}" required autofocus>
                @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group">
                <input type="email" class="form-control" placeholder="Email address"  name="email" value="{{ old('email') }}" required>
                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group">
                <input type="password" class="form-control" placeholder="Password" name="password" required>
                @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group">
                <input type="password" class="form-control" placeholder="Password (confirm)" name="password_confirmation" required>
            </div>

            <br>
            <button class="btn btn-bold btn-block btn-primary" type="submit">Register</button>
        </form>

        <hr class="w-30">

        <p class="text-center text-muted fs-13 mt-20">Already have an account? <a href="{{ route('login') }}">Sign in</a></p>
    </div>
</div>
@endsection
