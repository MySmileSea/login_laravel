@extends('layouts.app_login')

@section('content')
<!-- BEGIN LOGIN FORM -->
	<form class="login-form" action="{{ route('login') }}" method="POST">
		@csrf
		<h3 class="form-title">Sign In</h3>
		<div class="alert alert-danger display-hide">
			<button class="close" data-close="alert"></button>
			<span>
			Enter any username and password. </span>
		</div>
		<div class="form-group">
			<!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
			<label class="control-label visible-ie8 visible-ie9" for="email">{{ __('Email Address') }}</label>
			<input id="email" class="form-control form-control-solid placeholder-no-fix" type="email" required autocomplete="email" placeholder="Email" name="email" value="{{ old('email') }}" autofocus>
		</div>
		<div class="form-group">
			<label for="password" class="control-label visible-ie8 visible-ie9">{{ __('Password') }}</label>
			<input id="password" class="form-control form-control-solid placeholder-no-fix" type="password" required autocomplete="current-password" placeholder="Password" name="password"/>
		</div>
		<div class="form-actions">
			<button type="submit" class="btn btn-success uppercase">{{ __('Login') }}</button>
			<label for="remember" class="rememberme check">
			<input type="checkbox" id="remember" name="remember" value="{{ old('remember') ? 'checked' : '' }}"/>{{ __('Remember') }} </label>
			<a href="{{route('password.request')}}" id="forget-password" class="forget-password">{{ __('Forgot Password?') }}</a>
		</div>
		<div class="login-options">
			<h4>Or login with</h4>
			<ul class="social-icons">
				<li>
					<a class="social-icon-color facebook" data-original-title="facebook" href="javascript:;"></a>
				</li>
				<li>
					<a class="social-icon-color twitter" data-original-title="Twitter" href="javascript:;"></a>
				</li>
				<li>
					<a class="social-icon-color googleplus" data-original-title="Goole Plus" href="javascript:;"></a>
				</li>
				<li>
					<a class="social-icon-color linkedin" data-original-title="Linkedin" href="javascript:;"></a>
				</li>
			</ul>
		</div>
		<div class="create-account">
			<p>
				<a href="{{ route('register') }}" id="register-btn" class="uppercase">Create an account</a>
			</p>
		</div>
	</form>
<!-- END LOGIN FORM -->
@endsection