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
		<link href="/css/iziToast.min.css " rel="stylesheet">
		<script src="/js/iziToast.min.js" type="text/javascript"></script>
		<script src="/js/jquery.min.js" type="text/javascript"></script>
        <script src="/js/jquery.mask.js" type="text/javascript"></script>
		<script src="/js/moment.min.js"></script>
		<script src="/js/vendor//popper.min.js"></script>
		<script src="/js/vendor/bootstrap.min.js"></script>
		<script src="/js/vendor/pace.min.js"></script>
		<script src="/js/vendor/perfect-scrollbar.min.js"></script>
		<script src="/js/vendor/coreui.min.js"></script>
		<!-- Main styles for this application-->
		<link href="/css/style.css" rel="stylesheet">
		<link href="/css/admin.css" rel="stylesheet">
		<link href="/css/pace.min.css" rel="stylesheet">
	</head>
  	<body class="app  header-fixed sidebar-fixed  sidebar-lg-show pace-done ">
		<header class="app-header navbar">
			<button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
				<span class="navbar-toggler-icon"></span>
			</button>
			<span class="navbar-brand"></span>
			<ul class="nav navbar-nav ml-auto">
				<a href="/logout"><i class="fa fa-lock"></i> Logout</a>
			</ul>
		</header>
    <div class="app-body">
		<div class="sidebar">
			<nav class="sidebar-nav">
				<ul class="nav">
					<li class="nav-item nav-dropdown">
							<a class="nav-link nav-dropdown-toggle" href="#"><i class="fa fa-user-o fa-lg mt-1"></i>Usuários</a>
							<ul class="nav-dropdown-items">
						<li class="nav-item">
							<a class="nav-link" href="/usuarios/adicionar"><i class="fa fa-address-book-o fa-lg mt-1"></i> Adicionar</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="/usuarios/listar">
							<i class="fa fa-list fa-lg mt-1"></i> Listar</a>
						</li>
					</li>
				</ul>

				<ul class="nav">
					<li class="nav-item nav-dropdown">
							<a class="nav-link nav-dropdown-toggle" href="#"><i class="fa fa-home fa-lg mt-1"></i>Pousadas</a>
							<ul class="nav-dropdown-items">
						<li class="nav-item">
							<a class="nav-link" href="/pousadas/adicionar"><i class="fa fa-address-book-o fa-lg mt-1"></i> Adicionar</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="/pousadas/lista">
							<i class="fa fa-list fa-lg mt-1"></i> Listar</a>
						</li>
					</li>
				</ul>

				<ul class="nav">
					<li class="nav-item nav-dropdown">
							<a class="nav-link nav-dropdown-toggle" href="#"><i class="fa fa-users fa-lg mt-1"></i>Cadastros</a>
							<ul class="nav-dropdown-items">
						<li class="nav-item">
							<a class="nav-link" href="/cadastros/adicionar"><i class="fa fa-address-book-o fa-lg mt-1"></i> Adicionar</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="/cadastros/lista">
							<i class="fa fa-list fa-lg mt-1"></i> Listar</a>
						</li>
					</li>
				</ul>

				<ul class="nav">
					<li class="nav-item nav-dropdown">
							<a class="nav-link nav-dropdown-toggle" href="#"><i class="fa fa-calculator fa-lg mt-1"></i>Pedidos</a>
							<ul class="nav-dropdown-items">
						<li class="nav-item">
							<a class="nav-link" href="/pedidos/adicionar"><i class="fa fa-address-book-o fa-lg mt-1"></i> Adicionar</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="/pedidos/listar">
							<i class="fa fa-list fa-lg mt-1"></i> Listar</a>
						</li>
					</li>
				</ul>
			</nav>
			<button class="sidebar-minimizer brand-minimizer" type="button"></button>
		</div>
		<main class="main">
			<!-- Breadcrumb-->
			<ol class="breadcrumb">
				
			</ol>
			<div class="container-fluid"></div>
				@yield('conteudo')
			</div>		
		</main>
    </div>
    <footer class="app-footer">
      <div>
        <span>Vagan &copy; 2018 </span>
      </div>
     
    </footer>
    <!-- CoreUI and necessary plugins-->

	
	
  </body>
</html>
