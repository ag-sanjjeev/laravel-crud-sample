<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="csrf-token" content="{{ csrf_token() }}" />
	<!-- Css -->
	<link rel="stylesheet" type="text/css" href="./css/thirdparty/bootstrap.css" media="all" />

	<!-- Icon -->
	<link rel="stylesheet" type="text/css" href="./icon/fontawesome/css/all.css" media="all" />

	<title>Register Account</title>
</head>
<body>

	<section class="container-fluid ">
		
		<div class="row vh-100 justify-content-center align-items-center">
			
			<form class="col-lg-4 col-md-3 row bg-light justify-content-center border border-light rounded-2 shadow py-3 px-3" action="{{ route('registration.create') }}" method="post">
				@csrf
				<div class="col-12 row flex-row align-items-center text-center my-3">
					<hr class="col w-100 p-0 m-0">
					<h3 class="h3 col">Registration</h3>
					<hr class="col w-100 p-0 m-0">
				</div>

				<div class="col-12 mb-3">
					
					<label for="name">Name</label>
					<div class="form-group">
						<input type="text" name="name" id="name" class="form-control" placeholder="Enter your name" value="{{ old('name') }}" required autofocus />

						@error('name')
							<div class="text-danger">{{ $message }}</div>
						@enderror
					</div>

				</div>

				<div class="col-12 mb-3">
					
					<label for="email">Email</label>
					<div class="form-group">
						<input type="email" name="email" id="email" class="form-control" placeholder="Enter your email address" value="{{ old('email') }}" required />

						@error('email')
							<div class="text-danger">{{ $message }}</div>
						@enderror
					</div>

				</div>

				<div class="col-12 mb-3">
					
					<label for="password">Password</label>
					<div class="form-group">
						<input type="password" name="password" id="password" class="form-control" placeholder="Enter your password" value="{{ old('password') }}" required />

						@error('password')
							<div class="text-danger">{{ $message }}</div>
						@enderror
					</div>

				</div>

				<div class="col-12 mb-3">
					
					<label for="passwordConfirm">Confirm Password</label>
					<div class="form-group">
						<input type="password" name="passwordConfirm" id="passwordConfirm" class="form-control" placeholder="Confirm your password" value="{{ old('passwordConfirm') }}" required />

						@error('passwordConfirm')
							<div class="text-danger">{{ $message }}</div>
						@enderror
					</div>

				</div>

				<div class="col-12 my-3">
					
					<button type="submit" class="btn btn-success w-100">Create Account</button>
					<p class="small">Already having account <a href="{{URL::route('login')}}" class="btn-link">Login Account</a></p>

				</div>

			</form>

		</div>

	</section>	

	<!-- Scripts -->
	<script type="text/javascript" src="./js/thirdparty/jquery-3.6.0.min.js"></script>
	<script type="text/javascript" src="./js/thirdparty/bootstrap.bundle.js"></script>
</body>
</html>