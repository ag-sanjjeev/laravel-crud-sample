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

	<title>Login</title>
</head>
<body>

		<section class="container-fluid ">
		
		<div class="row vh-100 justify-content-center align-items-center">
			
			<form class="col-lg-4 col-md-3 row bg-light justify-content-center border border-light rounded-2 shadow py-3 px-3" action="{{ route('login.authenticate') }}" method="post">
				@csrf
				<div class="col-12 row flex-row align-items-center text-center my-3">
					<hr class="col w-100 p-0 m-0">
					<h3 class="h3 col">Login</h3>
					<hr class="col w-100 p-0 m-0">
				</div>

				<div class="col-12 mb-3">
					
					<label for="email">Email</label>
					<div class="form-group">
						<input type="email" name="email" id="email" class="form-control" placeholder="Enter your email address" required autofocus />

						@error('email')
							<div class="text-danger">{{ $message }}</div>
						@enderror
					</div>

				</div>

				<div class="col-12 mb-3">
					
					<label for="password">Password</label>
					<div class="form-group">
						<input type="password" name="password" id="password" class="form-control" placeholder="Enter your password" required />

						@error('password')
							<div class="text-danger">{{ $message }}</div>
						@enderror
					</div>

				</div>

				<div class="col-12">
					
					<input type="checkbox" name="rememberMe" id="rememberMe" class="form-check-input" value="On" />
					<label for="rememberMe" class="form-check-label">Remember Me</label>					

				</div>

				<div class="col-12 my-3">
					
					<button type="submit" class="btn btn-success w-100">Login</button>
					<p class="small">Are you new to here <a href="{{URL::route('registration')}}" class="btn-link">Create Account</a></p>

				</div>

			</form>

		</div>

	</section>

	<!-- Scripts -->
	<script type="text/javascript" src="./js/thirdparty/jquery-3.6.0.min.js"></script>
	<script type="text/javascript" src="./js/thirdparty/bootstrap.bundle.js"></script>
</body>
</html>