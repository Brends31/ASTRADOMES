﻿<?php 
  require_once("../controlador/controlador.php");

  if(isset($_POST["submit"])){
    
    if(isset($_POST["Titulo"]) && isset($_POST["Descripcion"])&& isset($_POST["Enlace"])){

      $Title = $_POST["Titulo"];
      $Descr = $_POST["Descripcion"];
      $Enl = $_POST["Enlace"];
      addDocumento($Title, $Descr, $Enl);
    }
  }
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ASTADOMES Admin Documentos</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
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
                        <img src="assets/img/logo.png" />
                    </a>
                </div>
              
                 <span class="logout-spn" >
                  <a href="#" style="color:#fff;">LOGOUT</a>  

                </span>
            </div>
        </div>
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                 


                    <li>
                        <a href="index.php" ><i class="fa fa-desktop "></i>Inicio </a>
                    </li>
                   
                    
                    <li>
                        <a href="ui.php"><i class="fa fa-table "></i>Usuarios</a>
                    </li>
                    <li>
                        <a href="Noticias.php"><i class="fa fa-edit "></i>Noticias</a>
                    </li>
                    
                    
                    <li>
                        <a href="Actividades.php"><i class="fa fa-bar-chart-o"></i>Actividades</a>
                    </li>                    

                    <li>
                      <a href="Galeria.php"><i class="fa fa-qrcode "></i>Galería </a>
                    </li>

                    
                    <li class="active-link">
                        <a href="DocumentosLey.php"><i class="fa fa-edit"></i>Documentos de Ley</a>
                    </li>
                </ul>
                            </div>
        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>DOCUMENTOS DE LEY </h2>   
                     <hr />

                    </div>
                </div>              

                <div class="row">
                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <h3 style="color:#214775;"> Crear Documento </h3>

                    <form action="DocumentosLey.php" method="post">
                    Nombre del Documento:     <br/> <input type="text" size = "50" name="Titulo"><br>
                    Descripción del Documento: <br/><input type="text"  size = "90" name="Descripcion"><br>
                    Enlace: <br/><input type="text"  size = "50" name="Enlace"><br>

                    <input class= "btn"  type="submit" name="submit"  class="submit" value="Crear">
                    </form>

                    <!-- <div class="form-group">
                      <label>Nombre del Documento</label>
                      <input class="form-control" />
                    </div>
                    
                    <div>
                      <label>Descripción del Documento</label>
                      <div>
                        <textarea rows="3" cols="50">
                        </textarea> 
                      </div>
                      
                    </div>
 
                    <div class="form-group">
                        <label>Enlace</label>
                        <input class="form-control" />
                    </div>
                    <div>
                      <a href="#" class="btn btn-default">Guardar</a>
                    </div>-->
                  </div>

                  <div class="col-lg-6 col-md-6">
                    <h3 style="color:#214775;"> Documentos de Ley</h3>
                    <table class="table table-striped table-bordered table-hover">
                      <thead>
                        <tr>
                          <th>Titulo</th>
                          <th>Descripción</th>
                          <th>Eliminar</th>
                        </tr>
                      </thead>

                      <tbody>
                        <?php createTableDocumentos();?>
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
                    &copy;  2014 yourdomain.com | Design by: <a href="http://binarytheme.com" style="color:#fff;"  target="_blank">www.binarytheme.com</a>
                </div>
        </div>
        </div>
          

     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
