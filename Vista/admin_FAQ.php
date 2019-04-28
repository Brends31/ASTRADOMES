<?php
require_once("../controlador/controlador.php");

if(isset($_POST["crearPregunta"])){

    if(isset($_POST["Pregunta"]) && isset($_POST["Respuesta"])){

        $Pregunta = $_POST["Pregunta"];
        $Respuesta = $_POST["Respuesta"];

        addPregunta($Pregunta, $Respuesta);
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ASTRADOMES-Admin-Documentos</title>
    <!-- Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" href="apple-touch-icon.html">
    <link rel="shortcut icon" href="favicon.ico">
    <!-- BOOTSTRAP STYLES-->
    <link href="assets_Admin/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets_Admin/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="assets_Admin/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>



<div id="wrapper">
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="adjust-nav">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">
                    <img src="assets_Admin/img/logo.png" />
                </a>
            </div>

            <span class="logout-spn" >
                  <a href="../controlador/cerrarSesion.php" style="color:#fff;">Cerrar Sesión</a>

                </span>
        </div>
    </div>
    <nav class="navbar-default navbar-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav" id="main-menu">

                <li>
                    <a href="admin_Index.php" ><i class="fa fa-desktop "></i>Inicio </a>
                </li>


                <li>
                    <a href="admin_Usuarios.php"><i class="fa fa-table "></i>Usuarios</a>
                </li>
                <li>
                    <a href="admin_Noticias.php"><i class="fa fa-edit "></i>Noticias</a>
                </li>


                <li>
                    <a href="admin_Actividades.php"><i class="fa fa-bar-chart-o"></i>Actividades</a>
                </li>

                <li>
                    <a href="admin_Galeria.php"><i class="fa fa-qrcode "></i>Galería </a>
                </li>


                <li >
                    <a href="admin_DocumentosLey.php"><i class="fa fa-edit"></i>Documentos de Ley</a>
                </li>
                <li class="active-link">
                    <a href="admin_FAQ.php"><i class="fa fa-edit "></i>Preguntas Frecuentes</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- /. NAV SIDE  -->
    <div id="page-wrapper" >
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h2>PREGUNTAS FRECUENTES </h2>
                    <hr />

                </div>
            </div>

            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <h3 style="color:#214775;"> Crear Pregunta </h3>

                    <form action="admin_FAQ.php" method="post">
                        Pregunta:     <br/> <input type="text" size = "50" name="Pregunta"><br>
                        Respuesta: <br/><textarea name="Respuesta" rows="5" cols="50"></textarea><br>

                        <input class= "btn"  type=submit name="crearPregunta" value="Crear Pregunta">
                    </form>

                </div>

                <div class="col-lg-6 col-md-6">
                    <h3 style="color:#214775;"> Preguntas Frecuentes</h3>
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>Pregunta</th>
                            <th>Respuesta</th>
                            <th>Eliminar</th>
                        </tr>
                        </thead>

                        <tbody>
                        <?php createTablePreguntas();?>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- /. ROW  -->
            <hr />

            <!-- /. ROW  -->
        </div>
        <!-- /. PAGE INNER  -->
    </div>
    <!-- /. PAGE WRAPPER  -->
</div>
<div class="footer">


    <div class="row">
        <div class="col-lg-12" >
            &copy;  Copyrights © 2018 Todos los Derechos Reservados por <a href="#" style="color:#fff;"  target="_blank">ASTRADOMES</a>
        </div>
    </div>
</div>


<!-- /. WRAPPER  -->
<!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
<!-- JQUERY SCRIPTS -->
<script src="assets_Admin/js/jquery-1.10.2.js"></script>
<!-- BOOTSTRAP SCRIPTS -->
<script src="assets_Admin/js/bootstrap.min.js"></script>
<!-- CUSTOM SCRIPTS -->
<script src="assets_Admin/js/custom.js"></script>


</body>
</html>
