@extends('layouts.app')

@section('content')

<div class="col-md-6 text-center " style="background-size: cover;background-image: url({{asset('assets/images/photo-long-3.jpg')}})">
	<div class="pl-3 auth-right">
		<div class="auth-logo text-center mt-4">
			<img src="{{asset('assets/images/logo.png')}}" alt="">
		</div>
		<div class="flex-grow-1"></div>
		<div class="w-100 mb-4">
			<a class="btn btn-outline-primary btn-outline-email btn-block btn-icon-text btn-rounded" href="signin.html">
				<i class="i-Mail-with-At-Sign"></i> Sign in with Email
			</a>
			<a class="btn btn-outline-primary btn-outline-google btn-block btn-icon-text btn-rounded">
				<i class="i-Google-Plus"></i> Sign in with Google
			</a>
			<a class="btn btn-outline-primary btn-outline-facebook btn-block btn-icon-text btn-rounded">
				<i class="i-Facebook-2"></i> Sign in with Facebook
			</a>
		</div>
		<div class="flex-grow-1"></div>
	</div>
</div>

<div class="col-md-6">
	<div class="p-4">
		<h1 class="mb-3 text-18">Sign Up</h1>

		<form method="POST" action="{{ route('register') }}">
			@csrf

			<div class="form-group">
				<label for="username">Your name</label>
				<input id="username" class="form-control form-control-rounded @error('name') is-invalid @enderror" type="text" name="name" value="{{ old('name') }}">

				@error('name')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
				@enderror
			</div>
			<div class="form-group">
				<label for="email">Email address</label>
				<input id="email" class="form-control form-control-rounded @error('email') is-invalid @enderror" type="email" name="email" value="{{ old('email') }}">

				@error('email')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
				@enderror
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<input id="password" class="form-control form-control-rounded @error('password') is-invalid @enderror" type="password" name="password">

				@error('password')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
				@enderror
			</div>
			<div class="form-group">
				<label for="repassword">Retype password</label>
				<input id="repassword" class="form-control form-control-rounded" type="password" name="password_confirmation" >
			</div>
			<button class="btn btn-primary btn-block btn-rounded mt-3">Sign Up</button>
		</form>
	</div>
</div>

@endsection
