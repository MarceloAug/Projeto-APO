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
    <title>Vagan</title>
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
    <script>
      window.dataLayer = window.dataLayer || [];

      function gtag() {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      // Shared ID
      gtag('config', 'UA-118965717-3');
      // Bootstrap ID
      gtag('config', 'UA-118965717-5');
    </script>
  </head>
  <body class="app flex-row align-items-center">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card-group">
			<form action="/login/autentificar" method="POST">
				<div class="card p-4">
					<div class="card-body">
							<h1>Login</h1>
							<p class="text-muted">Sign In to your account</p>
								<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text">
									<i class="icon-user"></i>
									</span>
								</div>
								<input class="form-control" type="text" placeholder="E-mail" name="email" >
							</div>
							<div class="input-group mb-4">
								<div class="input-group-prepend">
									<span class="input-group-text">
									<i class="icon-lock"></i>
									</span>
								</div>
								<input class="form-control" type="password" placeholder="Senha" name="password">
							</div>
							<div class="row">
								<div class="col-6">
									<button class="btn btn-primary px-4" type="submit">Login</button>
								</div>
								<div class="col-6 text-right">
									<button class="btn btn-link px-0" type="button">Forgot password?</button>
								</div>
							</div>
					</div>
				</div>
			</form>
            <div class="card text-white bg-primary py-5 d-md-down-none" style="width:44%">
              <div class="card-body text-center">
                <div>
                  <h2>Sign up</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                  <button class="btn btn-primary active mt-3" onclick="location.href='/login/register'" type="button">Register Now!</button>
                </div>
              </div>
            </div>
          </div>
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
