<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="{{ asset('front_assets/img/DigiRush_Solution.png') }}" type="image/png" />
	<link href="{{ asset('public/assets/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
	<link href="{{ asset('public/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" />
	<link href="{{ asset('public/assets/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet" />
	<link href="{{ asset('public/assets/css/pace.min.css') }}" rel="stylesheet" />
	<script src="{{ asset('public/assets/js/pace.min.js') }}"></script>
	<link href="{{ asset('public/assets/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('public/assets/css/bootstrap-extended.css') }}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
	<link href="{{ asset('public/assets/css/app.css') }}" rel="stylesheet">
	<link href="{{ asset('public/assets/css/icons.css') }}" rel="stylesheet">
	<title>DigiRush Solution - Admin Dashboard</title>
</head>

<body class="">
	<div class="wrapper">
		<div class="section-authentication-signin d-flex align-items-center justify-content-center my-5 my-lg-0">
			<div class="container">
				<div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
					<div class="col mx-auto">
						<div class="card mb-0">
							<div class="card-body">
								<div class="p-4">
									<div class="mb-3 text-center">
									</div>
									<div class="text-center mb-4">
										<h5 class="">Printer It Help</h5>
										<p class="mb-0">Please log in to your account</p>
									</div>
									<div class="form-body">
                                        <form class="row g-3" action='{{ route('login') }}' method="post">
                                            @csrf
											<div class="col-12">
												<label for="inputEmailAddress" class="form-label">Email</label>
												<input type="email" name="email" class="form-control" id="inputEmailAddress" placeholder="jhon@example.com" required>
												@error('email')
													<div class="text-danger">{{ $message }}</div>
												@enderror
											</div>
											<div class="col-12">
												<label for="inputChoosePassword" class="form-label">Password</label>
												<div class="input-group" id="show_hide_password">
													<input type="password" name="password" class="form-control border-end-0" id="inputChoosePassword" placeholder="Enter Password" required> 
													<a href="javascript:;" class="input-group-text bg-transparent"><i class='bx bx-hide'></i></a>
												</div>
												@error('password')
													<div class="text-danger">{{ $message }}</div>
												@enderror
											</div>
											<div class="col-md-6">
												<div class="form-check form-switch">
													<input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked">
													<label class="form-check-label" for="flexSwitchCheckChecked">Remember Me</label>
												</div>
											</div>
											<div class="col-md-6 text-end">	
												<a href="#">Forgot Password?</a>
											</div>
											<div class="col-12">
												<div class="d-grid">
													<button type="submit" class="btn btn-primary">Sign in</button>
												</div>
											</div>
                                            @if(Session::has('errors'))
                                            <div class="alert alert-danger">
                                                {{ Session::get('errors') }}
                                            </div>
                                            @endif
											<div class="col-12">
												<div class="text-center ">
													<p class="mb-0">Don't have an account yet? <a href="auth-basic-signup.html">Sign up here</a>
													</p>
												</div>
											</div>
										</form>
									</div>
									<div class="login-separater text-center mb-5">
										<hr/>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="{{ asset('public/assets/js/bootstrap.bundle.min.js')}}"></script>
	<script src="{{ asset('public/assets/js/jquery.min.js')}}"></script>
	<script src="{{ asset('public/assets/plugins/simplebar/js/simplebar.min.js')}}"></script>
	<script src="{{ asset('public/assets/plugins/metismenu/js/metisMenu.min.js')}}"></script>
	<script src="{{ asset('public/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
	<script>
		$(document).ready(function () {
			$("#show_hide_password a").on('click', function (event) {
				event.preventDefault();
				if ($('#show_hide_password input').attr("type") == "text") {
					$('#show_hide_password input').attr('type', 'password');
					$('#show_hide_password i').addClass("bx-hide");
					$('#show_hide_password i').removeClass("bx-show");
				} else if ($('#show_hide_password input').attr("type") == "password") {
					$('#show_hide_password input').attr('type', 'text');
					$('#show_hide_password i').removeClass("bx-hide");
					$('#show_hide_password i').addClass("bx-show");
				}
			});
		});
	</script>
	<!--app JS-->
	<script src="{{ asset('public/assets/js/app.js')}}"></script>
</body>

</html>
