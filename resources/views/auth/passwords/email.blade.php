@extends('layouts.app_login')

@section('content')
<!-- BEGIN FORGOT PASSWORD FORM -->
<form class="login-form" action="{{ route('password.email') }}" method="POST">
    @csrf
    <h3>Forget Password ?</h3>
    <p>
            Enter your e-mail address below to reset your password.
    </p>
    <div class="form-group">
        <input class="form-control placeholder-no-fix" id="email" type="email" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus/>
    </div>
    <div class="form-actions">
        <button type="button" id="back-btn" class="btn btn-default">Back</button>
        <button type="submit" class="btn btn-success uppercase pull-right">{{ __('Send Password Reset Link') }}</button>
    </div>
</form>
<!-- END FORGOT PASSWORD FORM -->
@endsection
