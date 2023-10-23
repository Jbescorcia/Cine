<?php
require_once("../administradores/conexion.php");
require_once("./salas.php");

$con = new conexion();
$sal = new sala($con->conectar());


if (isset($_POST['eliminar'])) {
	$sal->delete($_POST["capacidad"],$_POST["codigo"]);
}

if (isset($_POST['crear'])) {
    $sal->create($_POST["nombre"], $_POST["codigo"], $_POST["capacidad"]);
}

$arr = $sal->listar($con->conectar());
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Lista de salas</title>

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
					Administracion <br><small class="roboto-condensed-light">Salas De Cine</small>
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
									<a href="./sala-new.php"><i class="fas fa-plus fa-fw"></i> &nbsp; Agregar Sala</a>
								</li>
								<li>
									<a href="./sala-list.php"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de Salas</a>
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
                    <i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DE SALAS
                </h3>
                <p class="text-justify">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum delectus eos enim numquam fugit optio accusantium, aperiam eius facere architecto facilis quibusdam asperiores veniam omnis saepe est et, quod obcaecati.
                </p>
            </div>
            <div class="container-fluid">
			<ul class="full-box list-unstyled page-nav-tabs">
					<li>
						<a href="../funcion/funcion-new.php"><i class="fas fa-plus fa-fw"></i> &nbsp; NUEVA FUNCION</a>
					</li>
					<li>
						<a href="../funcion/funcion-list.php"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DE FUNCIONES</a>
					</li>
					<li>
						<a href="../peliculas/pelicula-list.php"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DE PELICULAS</a>
					</li>
					<li>
                        <a  href="../salas/sala-new.php"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; NUEVA SALA</a>
                    </li>
					<li>
                        <a class="active" href="../salas/sala-list.php"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DE SALAS</a>
                    </li>
				</ul>
            </div>
            
            <!--CONTENT-->
           <div class="container-fluid">
				<div class="table-responsive">
					<table class="table table-dark table-sm">
						<thead>
							<tr class="text-center roboto-medium">
								<th>NOMBRE</th>
								<th>CODIGO</th>
								<th>CAPACIDAD</th>
								<th>ELIMINAR</th>
							</tr>
						</thead>
						<tbody>
							<?php
							for ($i = 0; $i < count($arr); $i++) {
							?>
								<tr class="text-center">
									<td><?php echo $arr[$i]['nombre'] ?></td>
									<td><?php echo $arr[$i]['codigo'] ?></td>
									<td><?php echo $arr[$i]['capacidad'] ?></td>
									<td>
										<form method="post" action="">
											<input type="hidden" name="capacidad" value="<?php echo $arr[$i]['capacidad'] ?>">
											<input type="hidden" name="codigo" value="<?php echo $arr[$i]['codigo'] ?>">
											<button class="btn btn-danger" type="submit" name="eliminar">Eliminar</button>
										</form>
									</td>
								</tr>
							<?php
							
							}
							$con->desconectar();
							?>
						</tbody>
					</table>
				</div>
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