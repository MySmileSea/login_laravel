@extends('layouts.app_login')

@section('content')
<!-- BEGIN REGISTRATION FORM -->
	<form class="login-form" action="{{ route('register') }}" method="POST">
		@csrf
		<h3>Sign Up</h3>
		<p class="hint">
				Enter your personal details below:
		</p>
		<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9" for="name" >{{ __('Name') }}</label>
			<input class="form-control placeholder-no-fix" id="name" type="text" placeholder="Name" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus/>
		</div>
		<div class="form-group">
			<!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
			<label for="email" class="control-label visible-ie8 visible-ie9">{{ __('Email Address') }}</label>
			<input class="form-control placeholder-no-fix" type="email" placeholder="Email" name="email" id="email" value="{{ old('email') }}" required autocomplete="email"/>
		</div>
		<div class="form-group">
			<label for="password" class="control-label visible-ie8 visible-ie9">{{ __('Password') }}</label>
			<input class="form-control placeholder-no-fix" id="password" type="password" autocomplete="off" id="register_password" placeholder="Password" name="password" required autocomplete="new-password"/>
		</div>
		<div class="form-group">
			<label for="password-confirm" class="control-label visible-ie8 visible-ie9">{{ __('Confirm Password') }}</label>
			<input class="form-control placeholder-no-fix" id="password-confirm" type="password" autocomplete="off" placeholder="Re-type Your Password" name="password_confirmation" required autocomplete="new-password"/>
		</div>
		<div class="form-group margin-top-20 margin-bottom-20">
			<label class="check">
			<input type="checkbox" name="tnc"/> I agree to the <a href="javascript:;">Terms of Service </a>& <a href="javascript:;">Privacy Policy </a>
			</label>
			<div id="register_tnc_error">
			</div>
		</div>
		<div class="form-actions">
			<button type="button" id="register-back-btn" class="btn btn-default">Back</button>
			<button type="submit" id="register-submit-btn" class="btn btn-success uppercase pull-right">{{ __('Register') }}</button>
		</div>
	</form>
<!-- END REGISTRATION FORM -->
@endsection
