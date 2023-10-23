<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Home</title>

	<!-- Normalize V8.0.1 -->
	<link rel="stylesheet" href="./css/normalize.css">

	<!-- Bootstrap V4.3 -->
	<link rel="stylesheet" href="./css/bootstrap.min.css">

	<!-- Bootstrap Material Design V4.0 -->
	<link rel="stylesheet" href="./css/bootstrap-material-design.min.css">

	<!-- Font Awesome V5.9.0 -->
	<link rel="stylesheet" href="./css/all.css">

	<!-- Sweet Alerts V8.13.0 CSS file -->
	<link rel="stylesheet" href="./css/sweetalert2.min.css">

	<!-- Sweet Alert V8.13.0 JS file-->
	<script src="./js/sweetalert2.min.js"></script>

	<!-- jQuery Custom Content Scroller V3.1.5 -->
	<link rel="stylesheet" href="./css/jquery.mCustomScrollbar.css">

	<!-- General Styles -->
	<link rel="stylesheet" href="./css/style.css">


</head>

<body>

	<!-- Main container -->
	<main class="full-box main-container">
		<!-- Nav lateral -->
		<section class="full-box nav-lateral">
			<div class="full-box nav-lateral-bg show-nav-lateral"></div>
			<div class="full-box nav-lateral-content">
				<figure class="full-box nav-lateral-avatar">
					<i class="far fa-times-circle show-nav-lateral"></i>
					<img src="./assets/avatar/cine.png" class="img-fluid" alt="Avatar">
					<figcaption class="roboto-medium text-center">
						Administracion <br><small class="roboto-condensed-light">Salas De Cine</small>
					</figcaption>
				</figure>
				<div class="full-box nav-lateral-bar"></div>
				<nav class="full-box nav-lateral-menu">
					<ul>
						<li>
							<a href="./home.php"><i class="fab fa-dashcube fa-fw"></i> &nbsp; Dashboard</a>
						</li>

						<li>
							<a href="#" class="nav-btn-submenu"><i class="fas fa-users fa-fw"></i> &nbsp; Administradores <i class="fas fa-chevron-down"></i></a>
							<ul>
								<li>
									<a href="./administradores/admin-new.php"><i class="fas fa-plus fa-fw"></i> &nbsp; Agregar Administrador</a>
								</li>
								<li>
									<a href="./administradores/admin-list.php"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de Administradores</a>
								</li>
							</ul>
						</li>

						<li>
							<a href="#" class="nav-btn-submenu"><i class="fas fa-couch"></i>&nbsp; Salas de Cine <i class="fas fa-chevron-down"></i></a>
							<ul>
								<li>
									<a href="./salas/sala-new.php"><i class="fas fa-plus fa-fw"></i> &nbsp; Agregar Sala</a>
								</li>
								<li>
									<a href="./salas/sala-list.php"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de Salas</a>
								</li>
							</ul>
						</li>

						<li>
							<a href="#" class="nav-btn-submenu"><i class="fas fa-film"></i> &nbsp; Peliculas <i class="fas fa-chevron-down"></i></a>
							<ul>
								<li>
									<a href="./peliculas/pelicula-new.php"><i class="fas fa-plus fa-fw"></i> &nbsp; Nueva Pelicula</a>
								</li>
								<li>
									<a href="./peliculas/pelicula-list.php"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de Peliculas</a>
								</li>
							</ul>
						</li>

						<li>
							<a href="#" class="nav-btn-submenu"><i class="fas fa-file-video"></i> &nbsp; Funcion <i class="fas fa-chevron-down"></i></a>
							<ul>
								<li>
									<a href="./funcion/funcion-new.php"><i class="fas fa-plus fa-fw"></i> &nbsp; Nuevo Funcion</a>
								</li>
								<li>
									<a href="./funcion/funcion-list.php"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de Funciones</a>
								</li>
							</ul>
						</li>
					</ul>
				</nav>
			</div>
		</section>

		<!-- Page content -->
		<section class="full-box page-content">
			<nav class="full-box navbar-info">
				<a href="#" class="float-left show-nav-lateral">
					<i class="fas fa-exchange-alt"></i>
				</a>
				<form action="./login.php" method="post">
					<button type="submit" name="cerrar" class="btn btn-danger"><i class="fas fa-power-off"></i></button>
				</form>
			</nav>

			<!-- Page header -->
			<div class="full-box page-header">
				<h3 class="text-left">
					<i class="fab fa-dashcube fa-fw"></i> &nbsp; DASHBOARD
				</h3>
				<p class="text-justify">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit nostrum rerum animi natus beatae ex. Culpa blanditiis tempore amet alias placeat, obcaecati quaerat ullam, sunt est, odio aut veniam ratione.
				</p>
			</div>

			<!-- Content -->
			<div class="full-box tile-container">

				<a href="./administradores/admin-list.php" class="tile">
					<div class="tile-tittle">Administradores</div>
					<div class="tile-icon">
						<i class="fas fa-users fa-fw"></i>
					</div>
				</a>

				<a href="./salas/sala-list.php" class="tile">
					<div class="tile-tittle">Salas</div>
					<div class="tile-icon">
						<i class="fas fa-couch"></i>
					</div>
				</a>

				<a href="./peliculas/pelicula-list.php" class="tile">
					<div class="tile-tittle">Peliculas</div>
					<div class="tile-icon">
						<i class="fas fa-film"></i>
					</div>
				</a>

				<a href="./funcion/funcion-list.php" class="tile">
					<div class="tile-tittle">Funciones</div>
					<div class="tile-icon">
						<i class="fas fa-file-video"></i>
					</div>
				</a>

			</div>
		</section>
	</main>


	<!--=============================================
	=            Include JavaScript files           =
	==============================================-->
	<!-- jQuery V3.4.1 -->
	<script src="./js/jquery-3.4.1.min.js"></script>

	<!-- popper -->
	<script src="./js/popper.min.js"></script>

	<!-- Bootstrap V4.3 -->
	<script src="./js/bootstrap.min.js"></script>

	<!-- jQuery Custom Content Scroller V3.1.5 -->
	<script src="./js/jquery.mCustomScrollbar.concat.min.js"></script>

	<!-- Bootstrap Material Design V4.0 -->
	<script src="./js/bootstrap-material-design.min.js"></script>
	<script>
		$(document).ready(function() {
			$('body').bootstrapMaterialDesign();
		});
	</script>

	<script src="./js/main.js"></script>
</body>

</html>