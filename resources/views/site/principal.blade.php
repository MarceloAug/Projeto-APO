<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
		<link rel="icon" type="image/png" href="./assets/img/favicon.png">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<title>
			Vagan
		</title>
		<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
		<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
		<link href="/css/material-kit.css?v=2.0.5" rel="stylesheet" />
		<link href="/css/coreui-icons.min.css" rel="stylesheet">
		<link href="/css/flag-icon.min.css" rel="stylesheet">
		<link href="/css/font-awesome.min.css" rel="stylesheet">
		<link href="/css/simple-line-icons.css" rel="stylesheet">
		<link href="/css/demo.css" rel="stylesheet" />
	</head>

	<body class="index-page sidebar-collapse">
		<nav class="navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg" color-on-scroll="100" id="sectionsNav">
			<div class="container">
				<div class="navbar-translate">
					<a class="navbar-brand" href="https://demos.creative-tim.com/material-kit/index.html">
					vagan </a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="sr-only">Toggle navigation</span>
					<span class="navbar-toggler-icon"></span>
					<span class="navbar-toggler-icon"></span>
					<span class="navbar-toggler-icon"></span>
					</button>
				</div>
				<div class="collapse navbar-collapse">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item">
							<a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="https://twitter.com/CreativeTim" target="_blank" data-original-title="Follow us on Twitter">
							<i class="fa fa-twitter"></i>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="https://www.facebook.com/CreativeTim" target="_blank" data-original-title="Like us on Facebook">
							<i class="fa fa-facebook-square"></i>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="https://www.instagram.com/CreativeTimOfficial" target="_blank" data-original-title="Follow us on Instagram">
							<i class="fa fa-instagram"></i>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<div class="page-header header-filter clear-filter purple-filter" data-parallax="true" style="background-image: url('/img/bg2.jpg');">
			<div class="container">
				<div class="row">
					<div class="col-md-8 ml-auto mr-auto">
						<div class="brand">
							<h1 style="font-family:Snell Roundhand, sans-serif">Vagan</h1>
							<form action="/index/filtra" method="GET">
								<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
								<div class="col-lg-12 col-sm-4">
									<div class="form-group bmd-form-group">
										<div class="input-group">
											<input type="text" class="form-control" placeholder="Filtre a localidade" name="localidade">
										</div>
										<!-- <div class="input-group">
											<input type="text" class="form-control datetimepicker"  placeholder="Data inicial">
											<input type="text" class="form-control datetimepicker"  placeholder="Data final">
										</div> -->
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		
        @yield('conteudo')
        <footer class="footer" data-background-color="black">
            <div class="container">
                <nav class="float-left">
                    <ul>
                        <li>
                            <a href="https://www.creative-tim.com">
                            Creative Tim
                            </a>
                        </li>
                        <li>
                            <a href="https://creative-tim.com/presentation">
                            About Us
                            </a>
                        </li>
                        <li>
                            <a href="http://blog.creative-tim.com">
                            Blog
                            </a>
                        </li>
                        <li>
                            <a href="https://www.creative-tim.com/license">
                            Licenses
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="copyright float-right">
                    <a href="https://www.creative-tim.com" target="_blank">&copy;Vagan</a> 
                </div>
            </div>
        </footer>
        <script src="/js/jquery.min.js" type="text/javascript"></script>
        <script src="/js/popper.min.js" type="text/javascript"></script>
        <script src="/js/bootstrap-material-design.min.js" type="text/javascript"></script>
        <script src="/js/moment.min.js"></script>
        <script src="/js/bootstrap-datetimepicker.js" type="text/javascript"></script>
        <script src="/js/nouislider.min.js" type="text/javascript"></script>
        <script src="/js/material-kit.js?v=2.0.5" type="text/javascript"></script>
    </body>
</html>