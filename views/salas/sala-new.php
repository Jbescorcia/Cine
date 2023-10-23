<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Nueva Sala</title>

    <!-- Normalize V8.0.1 -->
    <link rel="stylesheet" href="../css/normalize.css">

    <!-- Bootstrap V4.3 -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <!-- Bootstrap Material Design V4.0 -->
    <link rel="stylesheet" href="../css/bootstrap-material-design.min.css">

    <!-- Font Awesome V5.9.0 -->
    <link rel="stylesheet" href="../css/all.css">

    <!-- Sweet Alerts V8.13.0 CSS file -->
    <link rel="stylesheet" href="../css/sweetalert2.min.css">

    <!-- Sweet Alert V8.13.0 JS file-->
    <script src="../js/sweetalert2.min.js"></script>

    <!-- jQuery Custom Content Scroller V3.1.5 -->
    <link rel="stylesheet" href="../css/jquery.mCustomScrollbar.css">

    <!-- General Styles -->
    <link rel="stylesheet" href="../css/style.css">


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
                    <img src="../assets/avatar/cine.png" class="img-fluid" alt="Avatar">
                    <figcaption class="roboto-medium text-center">
                        Administracion <br><small class="roboto-condensed-light">Sala De Cine</small>
                    </figcaption>
                </figure>
                <div class="full-box nav-lateral-bar"></div>
                <nav class="full-box nav-lateral-menu">
					<ul>
						<li>
							<a href="../home.php"><i class="fab fa-dashcube fa-fw"></i> &nbsp; Dashboard</a>
						</li>

						<li>
							<a href="#" class="nav-btn-submenu"><i class="fas fa-users fa-fw"></i> &nbsp; Administradores <i class="fas fa-chevron-down"></i></a>
							<ul>
								<li>
									<a href="../administradores/admin-new.php"><i class="fas fa-plus fa-fw"></i> &nbsp; Agregar Administrador</a>
								</li>
								<li>
									<a href="../administradores/admin-list.php"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de Administradores</a>
								</li>
							</ul>
						</li>

						<li>
							<a href="#" class="nav-btn-submenu"><i class="fas fa-couch"></i> &nbsp; Salas de Cine <i class="fas fa-chevron-down"></i></a>
							<ul>
								<li>
									<a href="../salas/sala-new.php"><i class="fas fa-plus fa-fw"></i> &nbsp; Agregar Sala</a>
								</li>
								<li>
									<a href="../salas/sala-list.php"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de Salas</a>
								</li>
							</ul>
						</li>

						<li>
							<a href="#" class="nav-btn-submenu"><i class="fas fa-film"></i> &nbsp; Peliculas <i class="fas fa-chevron-down"></i></a>
							<ul>
								<li>
									<a href="../peliculas/pelicula-new.php"><i class="fas fa-plus fa-fw"></i> &nbsp; Nueva Pelicula</a>
								</li>
								<li>
									<a href="../peliculas/pelicula-list.php"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de Peliculas</a>
								</li>
							</ul>
						</li>

						<li>
							<a href="#" class="nav-btn-submenu"><i class="fas fa-file-video"></i> &nbsp; Funcion <i class="fas fa-chevron-down"></i></a>
							<ul>
								<li>
									<a href="../funcion/funcion-new.php"><i class="fas fa-plus fa-fw"></i> &nbsp; Nueva Funcion</a>
								</li>
								<li>
									<a href="../funcion/funcion-list.php"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de Funciones</a>
								</li>
							</ul>
						</li>
					</ul>
				</nav>
            </div>
        </section>
        <section class="full-box page-content">
            <nav class="full-box navbar-info">
                <a href="#" class="float-left show-nav-lateral">
                    <i class="fas fa-exchange-alt"></i>
                </a>
                <form action="../login.php" method="post">
					<button type="submit" name="cerrar" class="btn btn-danger"><i class="fas fa-power-off"></i></button>
				</form>
            </nav>
            <!-- Page header -->
            <div class="full-box page-header">
                <h3 class="text-left">
                    <i class="fas fa-plus fa-fw"></i> &nbsp; AGREGAR SALA
                </h3>
                <p class="text-justify">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque laudantium necessitatibus eius iure adipisci modi distinctio. Earum repellat iste et aut, ullam, animi similique sed soluta tempore cum quis corporis!
                </p>
            </div>
            <div class="container-fluid">
			<ul class="full-box list-unstyled page-nav-tabs">
					<li>
						<a  href="./funcion-new.php"><i class="fas fa-plus fa-fw"></i> &nbsp; NUEVA FUNCION</a>
					</li>
					<li>
						<a href="./funcion-list.php"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DE FUNCIONES</a>
					</li>
					<li>
						<a href="../peliculas/pelicula-list.php"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de Peliculas</a>
					</li>
					<li>
                        <a  href="../salas/sala-list.php"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DE SALAS</a>
                    </li>
					<li>
                        <a class="active" href="./sala-new.php"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; NUEVA SALA</a>
                    </li>
				</ul>
            </div>
            
            <!--CONTENT-->
            <div class="container-fluid">
				<form action="./sala-list.php" class="form-neon" autocomplete="off" method="post">
					<fieldset>
						<legend><i class="far fa-plus-square"></i> &nbsp; Información de salas</legend>
						<div class="container-fluid">
							<div class="row">
								<div class="col-12 col-md-4">
									<div class="form-group">
										<label for="nombre" class="bmd-label-floating">Nombre</label>
										<input type="text" pattern="[a-zA-záéíóúÁÉÍÓÚñÑ0-9 ]{1,140}" class="form-control" name="nombre" id="nombre" required>
									</div>
								</div>
								
								<div class="col-12 col-md-4">
									<div class="form-group">
										<label for="codigo" class="bmd-label-floating">Codigo</label>
										<input type="text" pattern="[a-zA-Z0-9-]{1,45}" class="form-control" name="codigo" id="codigo" required>
									</div>
								</div>
								<div class="col-12 col-md-4">
									<div class="form-group">
										<label for="capacidad" class="bmd-label-floating">Capacidad</label>
										<input type="number" pattern="[0-9]{1,9}" class="form-control" name="capacidad" id="capacidad" min="14" required>
									</div>
								</div>
							</div>
						</div>
					</fieldset>
					<br><br><br>
					<p class="text-center" style="margin-top: 40px;">
						&nbsp;
						<button type="submit" class="btn btn-raised btn-info btn-sm" name="crear"><i class="far fa-save"></i> &nbsp; GUARDAR</button>
					</p>
				</form>
			</div>
        </section>




    </main>
    
    	
	<!--=============================================
	=            Include JavaScript files           =
	==============================================-->
	<!-- jQuery V3.4.1 -->
	<script src="../js/jquery-3.4.1.min.js" ></script>

	<!-- popper -->
	<script src="../js/popper.min.js" ></script>

	<!-- Bootstrap V4.3 -->
	<script src="../js/bootstrap.min.js" ></script>

	<!-- jQuery Custom Content Scroller V3.1.5 -->
	<script src="../js/jquery.mCustomScrollbar.concat.min.js" ></script>

	<!-- Bootstrap Material Design V4.0 -->
	<script src="../js/bootstrap-material-design.min.js" ></script>
	<script>$(document).ready(function() { $('body').bootstrapMaterialDesign(); });</script>

	<script src="../js/main.js" ></script>
</body>
</html>