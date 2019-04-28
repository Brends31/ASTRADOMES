<?php  
  require_once("../controlador/controlador.php");
?>
<!DOCTYPE html>
<html>
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ASTRADOMES-Admin-Galería</title>
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
        <!-- /. NAV TOP  -->
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

                    <li class="active-link">
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
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2 style="color:#214775;">GALERÍA </h2>   
                     <hr />

                    </div>
                </div>    

                <div class = "row"> 
                  <div class="col-md-12 col-lg-12">
                    <div>
                        <form action="admin_Galeria.php" method="post" class="form-horizontal" enctype="multipart/form-data">
                          <div class="form-group">
                                  <input id="rutaImagenGaleria" name="rutaImagenGaleria" type="file" accept='image/*'
                                         class="uploadFile img" value="Upload Photo"
                                         >
                          </div>
                          <input class= "btn" type="submit" name="crearImagen" value="Subir Imagen">
                      </form>
                    </div><br><br>

                    <div>
                      <h4>Imagenes antiguas</h4>
                      <table class="table table-striped table-bordered table-hover">
                      <thead>
                        <tr>
                          <th>Imagen</th>
                          <th>Eliminar</th>
                        </tr>
                      </thead>

                      <tbody>
                        <tr>
                          <?php createTableGaleria() ?>
                        </tr>
                      </tbody>
                    </table>
                      
                    </div>
                    
                  </div>

                  
                  <div class="modal" id="img1">
                    <div class="imagen">
                      <a href="#img2"><img src="assets/images/normal/chairman.jpg"></a>
                    </div>
                    <a class="cerrar" href="#">☼</a>
                  </div>
    
                </div>     
                <hr />     
                 <!-- /. ROW  -->
                  
              
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
