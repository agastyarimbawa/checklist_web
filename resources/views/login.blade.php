<html>
	<head>
		<title>Login - Checklist Peralatan</title>
		<meta charset="utf-8">
    	<meta content="width=device-width, initial-scale=1" name="viewport">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/themify-icons.css">
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
		<div class="container">
			<div class="row justify-content-md-center mt-12">
				<div class="col-sm-8">
					<div class="row border-box">
						<div class="col-sm-6 p-0">
							<img src="img/elektro-login.jpg" class="img-fluid">
						</div>
						<div class="col-sm-6 p-0">
							<div class="card">
								<div class="card-header">
									<img src="img/mz-logo-login.png">
									<div class="sub-title">
										Masuk dashboard administrator/teknisi
									</div>
								</div>
								<div class="icon-user">
									<h4 class="ti-user"></h4>
								</div>
								<div class="card-body">
									<form method="POST" action="{{ route('login') }}">
									@csrf
									  <div class="input-group mb-3">
										  <div class="input-group-prepend">
										    <span class="input-group-text"><i class="ti-email"></i></span>
										  </div>
											<input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"required autocomplete="email" autofocus placeholder="username">
											  
											@error('email')
												<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
											@enderror
									  </div>
									  <div class="input-group mb-3">
										  <div class="input-group-prepend">
										    <span class="input-group-text"><i class="ti-lock"></i></span>
										  </div>
										  	<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required 	autocomplete="current-password" placeholder="password">

                                			@error('password')
                                    			<span class="invalid-feedback" role="alert">
                                        			<strong>{{ $message }}</strong>
                                    			</span>
											@enderror
									  </div>
									  <div class="form-group">
									  	 <label class="mz-check">
										</label>
										<label class="float-right"><a href="">Lupa Sandi?</a></label>
									  </div>
									  <button type="submit" class="btn btn-primary">
										{{ __('Login') }}
									  </button>
									</form>
								</div>
								
							</div>
						</div>
					</div>
					<div class="mt-4 text-right">
						<small>{{ date("Y") }} &copy; Created By - Agas</small>
					</div>
				</div>
				
			</div>
		</div>
	</body>
</html>