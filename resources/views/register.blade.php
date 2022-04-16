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
				<div class="co=lg-12 col-lg-12">
					<div class="wrap d-md-flex">
						<div class="img" style="background-image: url(assets/img/tripcar.png)" ></div>
						<div class="login-wrap p-4 p-md-5">
						<div class="d-flex">
							<div class="w-100">
								<h3 class="mb-3">Sign Up</h3>
								
							</div>
							
			      			</div>
							<form action="/register" method="POST">
								@csrf
								<div class="form-check form-check-inline mb-3">
									<input class="form-check-input" type="radio" name="role" value="3">
									<label class="form-check-label" for="role1">
										Customer
									</label>
									</div>
									<div class="form-check form-check-inline">
									<input class="form-check-input " type="radio" name="role" value="2" checked>
									<label class="form-check-label " for="role2">
										Event Organizer
									</label>
								</div>
								<div class="form-group mb-3">
									<label class="label" for="email">Email</label>
									<input type="text" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="example@gmail.com" required>
								</div>
								@error('email')
									<div class="alert alert-danger">{{ $message }}</div>
								@enderror

								<div class="form-group mb-3">
									<label class="label" for="name">Name</label>
									<input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" placeholder="example" required>
								</div>
								@error('nama')
									<div class="alert alert-danger">{{ $message }}</div>
								@enderror

								<div class="form-group mb-3">
									<label class="label" for="telephone">Phone Number</label>
									<input type="text" name="no_hp" class="form-control @error('no_hp') is-invalid @enderror" placeholder="08111111xxx" required>
								</div>
								@error('no_hp')
									<div class="alert alert-danger">{{ $message }}</div>
								@enderror

								<div class="form-group mb-3">
									<label class="label" for="password">Password</label>
									<input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" required>
								</div>
								@error('password')
									<div class="alert alert-danger">{{ $message }}</div>
								@enderror

								<div class="form-group mb-3">
									<label class="label" for="password_confirmation">Verify Password</label>
									<input type="password" name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" placeholder="Verify Password" required>
								</div>
								@error('password_confirmation')
									<div class="alert alert-danger">{{ $message }}</div>
								@enderror

								<button type="submit" class="form-control btn btn-primary rounded submit px-3">Sign Up</button>
		          			</form>
		        		</div>
		      		</div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>

	</body>
</html>

