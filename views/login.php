<?php

if (isset($_POST['login'])) {

    $link = new mysqli('localhost', 'root', '', 'cine');

    if ($link->connect_errno) {
		echo "<script>alert('Erro de Conexion con la base de datos.');</script>";
    } else {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $sql = "SELECT password FROM administrador WHERE username = '$username' and password = '$password'";

        $result = $link->query($sql);
        if ($result->fetch_assoc()) {
            session_start();
            $_SESSION['Reg'] = 'ok';
            header('Location: /views/home.php');

        } else {
            $_SESSION['Reg'] = 'fail';
			echo "<script>alert('Username o Clave Incorrectos.');</script>";
        }
    }
    mysqli_close($link);
}

if (isset($_POST['cerrar'])) {
    session_abort();
    header('Location: /views/login.php');
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Login</title>

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

	<!-- Sweet Alert V8.13.0 JS file -->
	<script src="./js/sweetalert2.min.js" ></script>

	<!-- jQuery Custom Content Scroller V3.1.5 -->
	<link rel="stylesheet" href="./css/jquery.mCustomScrollbar.css">
	
	<!-- General Styles -->
	<link rel="stylesheet" href="./css/style.css">
</head>
<body>

	<div class="login-container">
		<div class="login-content">
			<p class="text-center">
				<i class="fas fa-user-circle fa-5x"></i>
			</p>
			<p class="text-center">
				Inicia sesión con tu cuenta
			</p>
			<form action="./login.php" method="post">
				<div class="form-group">
					<label for="UserName" class="bmd-label-floating"><i class="fas fa-user-secret"></i> &nbsp; Username</label>
					<input type="text" class="form-control" id="UserName" name="username" pattern="[a-zA-Z0-9]{1,35}" maxlength="35" required>
				</div>
				<div class="form-group">
					<label for="UserPassword" class="bmd-label-floating"><i class="fas fa-key"></i> &nbsp; Contraseña</label>
					<input type="password" class="form-control" id="UserPassword" name="password" maxlength="200" required>
				</div>
				<input type="submit" class="btn-login text-center" value="LOG IN" name="login"/>
			</form>
		</div>
	</div>

	
	<!--=============================================
	=            Include JavaScript files           =
	==============================================-->
	<!-- jQuery V3.4.1 -->
	<script src="./js/jquery-3.4.1.min.js" ></script>

	<!-- popper -->
	<script src="./js/popper.min.js" ></script>

	<!-- Bootstrap V4.3 -->
	<script src="./js/bootstrap.min.js" ></script>

	<!-- jQuery Custom Content Scroller V3.1.5 -->
	<script src="./js/jquery.mCustomScrollbar.concat.min.js" ></script>

	<!-- Bootstrap Material Design V4.0 -->
	<script src="./js/bootstrap-material-design.min.js" ></script>
	<script>$(document).ready(function() { $('body').bootstrapMaterialDesign(); });</script>

	<script src="./js/main.js" ></script>
</body>
</html>