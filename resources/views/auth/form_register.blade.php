<!DOCTYPE html>

<html lang="en">
	<head>
		<base href="./">
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
		<meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
		<meta name="author" content="Łukasz Holeczek">
		<meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
		<title>CoreUI Free Bootstrap Admin Template</title>
		<!-- Icons-->
		<link href="/css/coreui-icons.min.css" rel="stylesheet">
		<link href="/css/flag-icon.min.css" rel="stylesheet">
		<link href="/css/font-awesome.min.css" rel="stylesheet">
		<link href="/css/simple-line-icons.css" rel="stylesheet">
		<!-- Main styles for this application-->
		<link href="/css/style.css" rel="stylesheet">
		<link href="/css/pace.min.css" rel="stylesheet">
		<!-- Global site tag (gtag.js) - Google Analytics-->
	
		<script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-118965717-3"></script>
	</head>
	<body class="app flex-row align-items-center">
			<div class="container">
				<div class="row justify-content-center">
						<div class="col-md-6">
							<div class="card mx-4">
								@if (count($errors) > 0)
									<div class="alert alert-danger">
									<ul>
										@foreach ($errors->all() as $error)
											<li>{{ $error }}</li>
										@endforeach
									</ul>
									</div>
								@endif
								
								@if(!empty($mensagem))
									<div class="alert alert-danger">
										<ul>
											<li>{{ $mensagem}}</li>
										</ul>
									</div>
								@endif

								<form action="/login/insert" method="POST">
									<div class="card-body p-4">
										<h1>Register</h1>
										<p class="text-muted">Create your account</p>
										<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
										<div class="input-group mb-3">
											<div class="input-group-prepend">
												<span class="input-group-text">
													<i class="icon-user"></i>
												</span>
											</div>
											<input class="form-control" type="text" placeholder="Username" name="name" value="{{old('name')}}">
										</div>
										<div class="input-group mb-3">
											<div class="input-group-prepend">
												<span class="input-group-text">@</span>
											</div>
											<input class="form-control" type="text" placeholder="Email" name="email" value="{{old('email')}}">
										</div>
										<div class="input-group mb-3">
											<div class="input-group-prepend">
												<span class="input-group-text">
													<i class="icon-lock"></i>
												</span>
											</div>
											<input class="form-control" type="password" placeholder="Senha" name="password">
										</div>
										<div class="input-group mb-4">
											<div class="input-group-prepend">
												<span class="input-group-text">
													<i class="icon-lock"></i>
												</span>
											</div>
											<input class="form-control" type="password" placeholder="Digite a senha novamente" name="rpassword">
										</div>
										<button class="btn btn-block btn-success" type="submit">Criar conta</button>
									</div>
								</div>
							</form>
						</div>
				</div>
			</div>
    <!-- CoreUI and necessary plugins-->
    <script src="/js/vendor/jquery.min.js"></script>
    <script src="/js/vendor//popper.min.js"></script>
    <script src="/js/vendor/bootstrap.min.js"></script>
    <script src="/js/vendor/pace.min.js"></script>
    <script src="/js/vendor/perfect-scrollbar.min.js"></script>
    <script src="/js/vendor/coreui.min.js"></script>
  </body>
</html>
