<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>ASTRADOMES-Admin</title>

    <!-- Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" href="apple-touch-icon.html">
    <link rel="shortcut icon" href="favicon.ico">

    <!-- BOOTSTRAP STYLES-->
    <link href="assets_Admin/css/bootstrap.css" rel="stylesheet"/>
    <!-- FONTAWESOME STYLES-->
    <link href="assets_Admin/css/font-awesome.css" rel="stylesheet"/>
    <!-- CUSTOM STYLES-->
    <link href="assets_Admin/css/custom.css" rel="stylesheet"/>
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'/>
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
                    <img src="assets_Admin/img/logo.png"/>

                </a>

            </div>

            <span class="logout-spn">
                  <a href="../controlador/cerrarSesion.php" style="color:#fff;">Cerrar Sesión</a>  

                </span>
        </div>
    </div>
    <!-- /. NAV TOP  -->
    <nav class="navbar-default navbar-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav" id="main-menu">


                <li class="active-link">
                    <a href="admin_Index.php"><i class="fa fa-desktop "></i>Inicio </a>
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


                <li>
                    <a href="admin_DocumentosLey.php"><i class="fa fa-edit"></i>Documentos de Ley</a>
                </li>
                <li>
                    <a href="admin_FAQ.php"><i class="fa fa-edit "></i>Preguntas Frecuentes</a>
                </li>

            </ul>
        </div>

    </nav>
    <!-- /. NAV SIDE  -->
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Panel de control del Administrador</h2>
                </div>
            </div>


            <!-- /. ROW  -->
            <hr/>
            <div class="row">
                <div class="col-lg-12 ">
                    <div class="alert alert-info">
                        <strong>Bienvenido Administrador! </strong>
                    </div>

                </div>
            </div>
            <!-- /. ROW  -->
            <div class="row text-center pad-top">
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                    <div class="div-square">
                        <a href="admin_Usuarios.php">
                            <i class="fa fa-users fa-5x"></i>
                            <h4>Usuarios</h4>
                        </a>
                    </div>


                </div>

                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                    <div class="div-square">
                        <a href="admin_Noticias.php">
                            <i class="fa fa-envelope-o fa-5x"></i>

                            <h4>Noticias</h4>
                        </a>
                    </div>


                </div>

                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                    <div class="div-square">
                        <a href="admin_Actividades.php">
                            <i class="fa fa-comments-o fa-5x"></i>
                            <h4>Actividades</h4>
                        </a>
                    </div>


                </div>


                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                    <div class="div-square">
                        <a href="admin_Galeria.php">
                            <i class="fa fa-lightbulb-o fa-5x"></i>
                            <h4>Galería</h4>
                        </a>
                    </div>


                </div>

                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                    <div class="div-square">
                        <a href="admin_DocumentosLey.php">
                            <i class="fa fa-clipboard fa-5x"></i>
                            <h4>Documentos</h4>
                        </a>
                    </div>


                </div>

                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                    <div class="div-square">
                        <a href="admin_FAQ.php">
                            <i class="fa fa-users fa-5x"></i>
                            <h4>Preguntas Frecuentes</h4>
                        </a>
                    </div>


                </div>


                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                    <div class="div-square">
                        <a href="https://dashboard.tawk.to/login " target="_blank">
                            <i class="fa fa-wechat fa-5x"></i>
                            <h4>Chat en Línea</h4>
                        </a>
                    </div>


                </div>

            </div>
        </div>
        <!-- /. PAGE INNER  -->
    </div>
    <!-- /. PAGE WRAPPER  -->
</div>
<div class="footer">


    <div class="row">
        <div class="col-lg-12">
            &copy; Copyrights © 2018 Todos los Derechos Reservados por <a href="http://binarytheme.com"
                                                                          style="color:#fff;"
                                                                          target="_blank">ASTRADOMES</a>
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
