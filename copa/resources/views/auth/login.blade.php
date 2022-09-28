<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>EVO BRINDES | Entrar</title>
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
		<link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/all.min.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/dist/css/adminlte.min.css') }}">
	</head>
	<body class="hold-transition login-page">
		<div class="login-box">
			<div class="login-logo">
				<a href="https://evobrindes.com.br/bievo"><b>EVO</b> BRINDES</a>
			</div>
			<div class="card">
				<div class="card-body login-card-body">
					<p class="login-box-msg">Faça login para acessar área restrita</p>
					<form action="{{ route('login') }}" method="POST" enctype="application/x-www-form-urlencoded">
                        @csrf
						<div class="input-group mb-3">
                            <input type="email" name="username" class="form-control" placeholder="Email" required />
							<div class="input-group-append">
								<div class="input-group-text">
									<span class="fas fa-envelope"></span>
								</div>
							</div>
						</div>
						<div class="input-group mb-3">
							<input type="password" name="password" class="form-control" placeholder="Password" required />
							<div class="input-group-append">
								<div class="input-group-text">
									<span class="fas fa-lock"></span>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-4">
								<button type="submit" class="btn btn-success btn-block">Entrar</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
		<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
		<script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
	</body>
</html>
