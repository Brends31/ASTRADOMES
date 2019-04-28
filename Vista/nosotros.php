<?php
    error_reporting(0);
    session_start();
    $varsesion = $_SESSION['usuario'];    
?>

<!doctype html>
<html lang="zxx">
    
<!-- Mirrored from smartitsource.com/reptro/reptro/index2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 30 Oct 2018 22:51:30 GMT -->
<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <!-- Page Title -->
    <title>ASTRADOMES-Nosotros</title>
    <!-- Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" href="apple-touch-icon.html">
    <link rel="shortcut icon" href="favicon.ico">
    <!-- Google Fonts css-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400,700" rel="stylesheet">
    <!-- Bootstrap css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <!-- Icofont css-->
    <link href="assets/icofont/icofont.min.css" rel="stylesheet" media="screen">
    <!-- FlatIcon css-->
    <link href="assets/font/flaticon.css" rel="stylesheet" media="screen">
    <!-- Carousel css -->
    <link href="assets/css/owl.carousel.min.css" rel="stylesheet" media="screen">
    <!-- Carousel default css -->
    <link href="assets/css/owl.theme.default.min.css" rel="stylesheet" media="screen">
    <!-- Animate css -->
    <link href="assets/css/animate.css" rel="stylesheet" media="screen">
    <!-- Lity css -->
    <link href="assets/css/lity.css" rel="stylesheet" media="screen">
    <!-- Style css -->
    <link href="assets/css/style.css" rel="stylesheet" media="screen">
    <!-- Responsive css -->
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!--Modernizr Js-->
    <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/5be9d9e40e6b3311cb78f489/default';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
    <!--End of Tawk.to Script-->
    
</head>


  <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

<body>

    <!-- Preloader Section -->
      <div id="loading">
        <div id="loading-center">
          <div id="loading-center-absolute">
          <div class="object" id="object_four"></div>
          <div class="object" id="object_three"></div>
          <div class="object" id="object_two"></div>
          <div class="object" id="object_one"></div>
          </div>
        </div>
      </div>
    <!-- Preloader Section -->

    <!-- Header Section Start -->
    <header id="main-header">
      <!-- header-top -->
        <div class="header-top">
          <div class="container">
            <div class="row">
              <div class="col-lg-6 col-md-6">
               <!--  Office Time  -->
                <div class="office-time float-left">
                  <p><span><i class="icofont-wall-clock"></i></span>Horario de Atención: Lun - Vie (8:30 am - 4:00 pm)</p>
                </div>
               <!--  Office Time  -->
              </div>
              <div class="col-lg-6 col-md-6">
                <?php 

                  if ($varsesion != null || $varsesion != '') {
                    echo "<!-- User Logout -->
                          <div class='user-logout float-right'>
                            <ul>
                              <li><span><i class='icofont-ui-user'></i></span><a href='usuario.php'>".$varsesion."</a></li>
                              <li id = 'li-logout'><a href='../controlador/cerrarSesion.php'>Cerrar Sesión</a></li>
                            </ul>
                          </div>
                          <!-- Login Register -->";
                  }

                  else {
                    echo "<!-- Login Register -->
                          <div class='login-register float-right'>
                            <ul>
                              <li><span><i class='icofont-ui-user'></i></span><a href='login.php'>Log in</a></li>
                              <li><a href='registro.php'>Registro</a></li>
                            </ul>
                          </div>
                          <!-- Login Register -->";
                  }

                 ?>
              </div>
            </div>
          </div>
        </div>
      <!-- header-top -->
      <!-- header-navigation -->
        <div class="header-bottom header-sticky">
        <!-- Header Inner -->
            <div class="header-inner">
              <div class="container">
                <div class="row">
                  <div class="col-lg-3 col-md-3 col-12">
                    <!-- Logo -->
                  <div class="logo">
                    <a href="index.php"><img src="assets/images/normal/logo.png" alt="Logo"></a>
                  </div>
                    <!--/End Logo -->
                  </div>
                  <div class="col-lg-9 col-md-9 col-12">
                    <!-- Main Menu -->
                    <div class="main-menu">
                      <nav class="navbar navbar-expand-lg">
                        <div class="navbar-collapse">
                          <ul class="nav menu navbar-nav">

                            <li><a href="index.php">Inicio</a></li>

                            <li><a href="galeria.php">Galería</a></li>

                            <li class="active"><a href="#">Organización<i class="icofont-simple-down"></i></a>
                              <ul class="dropdown">
                                <li class="active"><a href="nosotros.php">Nosotros</a></li>
                                <li><a href="servicios.php">Servicios</a></li>
                                <li><a href="actividades.php">Actividades</a></li>
                                <li><a href="preguntas.php">Preguntas Frecuentes</a></li>
                              </ul>
                            </li>

                            <li><a href="documentos.php">Documentos</a></li>

                            <li><a href="contacto.php">Contacto</a></li>

                            <li class="top-support"><a href="assets/documentos/ManualUsuario.pdf" target="_blank">Soporte</a></li>

                          </ul>

                        </div>
                      </nav>
                    </div>
                    <!--/ End Main Menu -->

                    <!-- Mobile Menu Start -->
                    <div class="mobile-menu d-block d-lg-none col"></div><!-- Mobile Menu End -->
                  </div>
                </div>
              </div>
            </div>
        <!--/ End Header Inner -->
        </div>
      <!-- header-navigation -->
    </header>
    <!-- Header Section End -->

    <!--Start breadcrumb Section  -->
    <section id="default-breadcrumb">
      <div class="breadcrumb-opacity"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="default-breadcrumb-title text-center">
              <h4>¿Quiénes somos?</h4>
              <ul class="breadcrumb-list">
                <li><a href="index.html">Inicio</a></li>
                <li class="active"><a href="#">Nosotros</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--End breadcrumb Section -->

    <!-- About Us -->
      <section id="about-us" class="section-bg-gray  pt-100  pb-100">
        <div class="container">
          <!-- Start Row -->
          <div class="row">
            <!-- Start Col -->
            <div class="col-lg-6 col-md-12">
              <div class="about-us-left">
                <h2>Bienvenido a ASTRADOMES</h2>
                <p>Somos una organización para asesorar a las trabajadoras domésticas y capacitarlas en distintas formas,
                existimos desde hace 26 años.</p>

                <h3>Misión</h3>

                <p>La Asociación de Trabajadoras Domésticas es una asociación de y para las mujeres dedicadas al trabajo doméstico remunerado, que busca mejorar sus condiciones de vida, esto mediante la organización, la capacitación, la asesoría, la divulgación, y la defensa e incidencia política y legal de sus derechos como humanas, mujeres, migrantes y trabajadoras.</p>

                <h3>Visión</h3>

                <p>Respeto y tolerancia de las diferencias entre las afiliadas, por ejemplo, diferencias religiosas, culturales, étnicas y personales, además que exista una democratización y transparencia en la toma de decisiones. Respeto de las instancias de toma de decisiones, comunicación periódica entre las afiliadas y las funcionarias de la organización.</p>

                <p>Participación activa de la Asamblea, de la Junta Directiva y el equipo de trabajo en el funcionamiento de la organización.</p>

                <p>Respeto de las responsabilidades y los derechos que le asigna los estatutos a cada una de sus miembras.</p>

                <p>Resolución de problemas mediante el dialogo y el consenso.</p>

                <p>Compromiso e identificación de las afiliadas, además la valuación, sistematización y seguimiento del trabajo de la organización.</p>

              </div>
            </div>
            <!-- End Col -->
            <!-- Start Col -->
            <div class="col-lg-6 col-md-12   responsive-320 responsive-pt-50">
              <div class="about-us-right">
                <img src="assets/images/video/1.jpg" alt="Image">
                <a href="https://www.youtube.com/watch?v=7rLh03i6mc0" class="icon-video popup-video" data-lity><span><i class="icofont-ui-play"></i></span></a>
              </div>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>
      </section>
    <!-- About Us -->

   <!--  Footer Bottom Area -->
    <footer id="footer-bottom">
      <div class="container">
        <!-- Start Row -->
        <div class="row">
          <!-- Start Col -->
          <div class=" col-lg-6 col-md-12">
            <div class="copy-text text-left">
              <p>Copyrights © 2018 Todos los Derechos Reservados por <a href="#">ASTRADOMES</a></p>
            </div>
          </div>
          <!-- End Col -->
        </div>
        <!-- End Row -->
      </div>
    </footer>
   <!--  Footer Bottom Area -->

    <!--All Jquery Library Files -->
    <script src="assets/js/vendor/jquery-3.3.1.min.js"></script>
    <!-- Carousel js  -->
    <script src="assets/js/owl.carousel.min.js"></script>
    <!-- Bootstrap js  -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Google Map Active js  -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBn-q0VMtMOum5A7HVG86duHeJApbVDv7o"></script>
    <script src="assets/js/map.js"></script>
    <!-- contact-form Js -->
    <script src="assets/js/contact-form.js"></script>
    <!-- Plugins Js -->
    <script src="assets/js/plugins.js"></script>
    <!-- wow.min Js -->
    <script src="assets/js/wow.min.js"></script>
    <!-- main Js -->
    <script src="assets/js/main.js"></script>

</body>


<!-- Mirrored from smartitsource.com/reptro/reptro/index2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 30 Oct 2018 22:52:42 GMT -->
</html>
