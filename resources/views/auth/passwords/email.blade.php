@extends('layouts.app')

@section('content')
<div class="mh-fullscreen bg-img center-vh p-20" style="background: linear-gradient(135deg, #6c03a0 0%,#24005e 100%);">
    <div class="card card-shadowed p-50 w-400 mb-0" style="max-width: 100%">
        <h5 class="text-uppercase text-center">Reset Password</h5>
        <br><br>
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
            {{ csrf_field() }}
            <div class="form-group">
                <input id="email" type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}" required>
            </div>
            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
            <div class="form-group">
                <button class="btn btn-bold btn-block btn-primary" type="submit">Send Password Reset Link</button>
            </div>
        </form>
    </div>
</div>
@endsection
