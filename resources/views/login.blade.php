<!doctype html>
<html lang="en">
	<head>
		<title>Login</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		
		<link rel="stylesheet" href="./assets/css/style_irwan.css">
		

	</head>
	<body>
	
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<img src="assets/img/1.png" alt="coba">
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-10">
					<div class="wrap d-md-flex">
						<div class="img" style="background-image: url(assets/img/tripplane.png);object-fit: fill;"></div>
						<div class="login-wrap p-4 p-md-5">
					<div class="d-flex">
						<div class="w-100">
							<h3 class="mb-4">Sign In</h3>
						</div>
						</div>
							<form action="/asam" method="POST">
								@csrf
								@if(session()->has('loginError')) 
									<label class="label" for="name">{{session('loginError')}}</label>
								@endif
								<div class="form-group mb-3">
									<label class="label" for="name">Email</label>
									<input type="text" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Username"  required>
								</div>
								@error('email')
    								<div class="alert alert-danger">{{ $message }}</div>
								@enderror

								<div class="form-group mb-3">
									<label class="label" for="password">Password</label>
									<input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" required>
								</div>
								@error('password')
									<div class="alert alert-danger">{{ $message }}</div>
								@enderror

								<button type="submit" class="form-control btn btn-primary rounded px-3">Sign In</button>
		          			</form>
		          			<p class="text-center">Have no account? <a href="/register">Sign Up</a></p>
							
		       			</div>
		      		</div>
				</div>
			</div>
		</div>
	</section>
	</body>
</html>

