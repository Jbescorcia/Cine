<?php
session_start();
if (isset($_SESSION['Reg'])) {
    if ($_SESSION['Reg'] == 'ok') {
?>
        <!DOCTYPE html>
        <html lang="es">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
            <title>Nueva pelicula</title>

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
                                            <a href="./pelicula-new.php"><i class="fas fa-plus fa-fw"></i> &nbsp; Nueva Pelicula</a>
                                        </li>
                                        <li>
                                            <a href="./pelicula-list.php"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de Peliculas</a>
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
                            <i class="fas fa-plus fa-fw"></i> &nbsp; NUEVA PELICULA
                        </h3>
                        <p class="text-justify">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium quod harum vitae, fugit quo soluta. Molestias officiis voluptatum delectus doloribus at tempore, iste optio quam recusandae numquam non inventore dolor.
                        </p>
                    </div>
                    <div class="container-fluid">
                        <ul class="full-box list-unstyled page-nav-tabs">
                            <li>
                                <a class="active" href="./pelicula-new.php"><i class="fas fa-plus fa-fw"></i> &nbsp; NUEVA PELICULA</a>
                            </li>
                            <li>
                                <a href="./pelicula-list.php"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DE PELICULAS</a>
                            </li>
                        </ul>
                    </div>

                    <!--CONTENT-->
                    <div class="container-fluid">
                        <div class="container-fluid form-neon">
                            <div class="container-fluid">
                                <p class="text-center roboto-medium">AGREGAR PELICULA</p>
                                <form action="./pelicula-list.php" autocomplete="off" method="post">
                                    <fieldset>
                                        <legend><i class="far fa-plus-square"></i> &nbsp; Información de la pelicula</legend>
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-12 col-md-4">
                                                    <div class="form-group">
                                                        <label for="nombre">Nombre</label>
                                                        <input type="text" class="form-control" name="nombre" id="nombre" required>
                                                    </div>
                                                </div>

                                                <div class="col-12 col-md-4">
                                                    <div class="form-group">
                                                        <label for="codigo">Codigo</label>
                                                        <input type="text" class="form-control" name="codigo" id="codigo" required>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-4">
                                                    <div class="form-group">
                                                        <label for="clasificacion" class="bmd-label-floating">Clasificacion</label>
                                                        <select class="form-control" name="clasificacion" id="clasificacion" required>
                                                            <option value="" selected="" disabled=""> </option>
                                                            <option value="tp">TP</option>
                                                            <option value="7">+7</option>
                                                            <option value="12">+12</option>
                                                            <option value="15">+15</option>
                                                            <option value="18">+18</option>
                                                        </select>
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
                        </div>
                </section>
            </main>


            <!--=============================================
	=            Include JavaScript files           =
	==============================================-->
            <!-- jQuery V3.4.1 -->
            <script src="../js/jquery-3.4.1.min.js"></script>

            <!-- popper -->
            <script src="../js/popper.min.js"></script>

            <!-- Bootstrap V4.3 -->
            <script src="../js/bootstrap.min.js"></script>

            <!-- jQuery Custom Content Scroller V3.1.5 -->
            <script src="../js/jquery.mCustomScrollbar.concat.min.js"></script>

            <!-- Bootstrap Material Design V4.0 -->
            <script src="../js/bootstrap-material-design.min.js"></script>
            <script>
                $(document).ready(function() {
                    $('body').bootstrapMaterialDesign();
                });
            </script>

            <script src="../js/main.js"></script>
        </body>

        </html>

<?php
    } else {
        header("Location: ../login.php");
    }
} else {
    header("Location: ../login.php");
}
?>