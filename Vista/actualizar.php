<?php 

	require_once("../controlador/controlador.php");
	error_reporting(0);
	session_start();
    $varsesion = $_SESSION['usuario'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>ASTRADOMES-Actualizar Datos</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" href="apple-touch-icon.html">
    <link rel="shortcut icon" href="favicon.ico">
<!-- Icofont css-->
    <link href="assets/icofont/icofont.min.css" rel="stylesheet" media="screen">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets_login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets_login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets_login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets_login/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="assets_login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets_login/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets_login/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="assets_login/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets_login/css/util.css">
	<link rel="stylesheet" type="text/css" href="assets_login/css/main.css">
<!--===============================================================================================-->
</head>

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
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">

				<form class="login100-form validate-form flex-sb flex-w" method="POST">
					<span class="login100-form-title p-b-32">
						Actualizar Datos
					</span>

					<span class="txt1 p-b-11">
						Nuevo Usuario
					</span>
					<div class="wrap-input100 m-b-36">
						<input class="input100" type="text" name="nusername" >
						<span class="focus-input100"></span>
					</div>

					<br><br><span class="txt1 p-b-11">
						Nuevo Correo
					</span>
					<div class="wrap-input100 m-b-36" >
						<input class="input100" type="text" name="nemail" >
						<span class="focus-input100"></span>
					</div>
					
					<span class="txt1 p-b-11">
						Nueva Contraseña
					</span>
					<div class="wrap-input100 m-b-36">
						<input class="input100" type="password" name="npass" >
						<span class="focus-input100"></span>
					</div>

					<span class="txt1 p-b-11">
						Confirmar Contraseña
					</span>
					<div class="wrap-input100 m-b-36">
						<input class="input100" type="password" name="npassc" >
						<span class="focus-input100"></span>
					</div>
					
					<span class="txt1 p-b-11">
						Nuevo Nombre
					</span>
					<div class="wrap-input100 m-b-36">
						<input class="input100" type="text" name="nname" >
						<span class="focus-input100"></span>
					</div>

					<span class="txt1 p-b-11">
						Nuevos Apellidos
					</span>
					<div class="wrap-input100 m-b-36">
						<input class="input100" type="text" name="nlastname" >
						<span class="focus-input100"></span>
					</div>
					
					<div class="flex-sb-m w-full p-b-48">

						<div>
							<a href="usuario.php" class="txt3">
								Regresar
							</a>
						</div>

					</div>

					<?php echo "<input type='hidden' name='usuarioActual' value='". $varsesion."'>"; ?>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit" formmethod="post" name="actualizarDatos">
							Actualizar
						</button>
					</div>

				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="assets_login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="assets_login/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="assets_login/vendor/bootstrap/js/popper.js"></script>
	<script src="assets_login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="assets_login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="assets_login/vendor/daterangepicker/moment.min.js"></script>
	<script src="assets_login/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="assets_login/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="assets_login/js/main.js"></script>

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
</html>