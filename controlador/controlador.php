<?php
require_once("../modelo/consultas.php");
require_once("../modelo/registrar.php");
require_once("../modelo/eliminar.php");

$noticias = getNoticias();
$usuarios = getUsuarios();
$documentos = getDocumentos();
$actividades = getActividades();
$galeria = getGaleria();
$preguntas = getFAQ();

function deleteNoticia($titulo){
	eliminarNoticia($titulo);
}
function deleteDocumento($titulo){
	eliminarDocumento($titulo);
}
function deletePhoto($path){
	eliminarImagen($path);
}
function deleteActivity($titulo){
	eliminarActividad($titulo);
}
function deshabilitarUser($username){
	deshabilitarUsuario($username);
}
function habilitarUser($username){
	habilitarUsuario($username);
}
function addImage($path){
	agregarImagen($path);
}
function addDocumento($titulo, $descripcion, $enlace){
	registrarDocumento($titulo, $descripcion, $enlace);
}
function addNews($titulo, $descripcion, $enlace, $ruta){
	registrarNoticia($titulo, $descripcion, $enlace, $ruta);
}
function addActivity($titulo, $descripcion, $path){
	registrarActividad($titulo, $descripcion, $path);
}

function addPregunta($pregunta, $respuesta){
	registrarPregunta($pregunta, $respuesta);
}

function obtenerNoticias(){
	return getNoticias();
}

function obtenerActividades(){
	return getActividades();
}

function obtenerDocumentos(){
	return getDocumentos();
}

function createTableUsuarios(){
	global $usuarios;
	if(count($usuarios) > 0){
		foreach ($usuarios as $usuario) {
			echo "<form method= 'POST'><tr> <input type='hidden' name='nombreUsuario' value='".$usuario[0]."'><td>" . $usuario[0] ."</td><td>" . $usuario[1] . "</td><td>" . $usuario[2] . "</td><td>" . $usuario[3] . "</td><td>" . $usuario[4] . "</td>";


			if ($usuario[4] == 0 and $usuario[3] == "Usuario") {
				echo "<td><input type = submit name = 'activarUsuario' value = 'Habiliatar'></td>
                <td><input type = submit name = 'accesoAdmin' value = 'Administrador'></td></tr></form> ";
			}

			else if ($usuario[4] == 1 and $usuario[3] == "Usuario") {
				echo "<td><input type = submit name = 'desactivarUsuario' value = 'Deshabiliatar'></td>
                <td><input type = submit name = 'accesoAdmin' value = 'Administrador'></td></tr></form> ";
			}

			else if ($usuario[4] == 0 and $usuario[3] == "Administrador") {
				echo "<td><input type = submit name = 'activarUsuario' value = 'Habiliatar'></td>
                <td><input type = submit name = 'accesoUsuario' value = 'Usuario'></td></tr></form> ";
			}

			else if ($usuario[4] == 1 and $usuario[3] == "Administrador") {
				echo "<td><input type = submit name = 'desactivarUsuario' value = 'Deshabiliatar'></td>
                <td><input type = submit name = 'accesoUsuario' value = 'Usuario'></td></tr></form> ";
			}

		}
	}
}

function createTableNoticias(){
	global $noticias;
	if(count($noticias) > 0){
		foreach ($noticias as $noticia) {
			echo "<form method= 'POST'><tr> <input type='hidden' name='tituloNoticia' value='".$noticia[0]."'><td>" . $noticia[0] ."</td><td>" . $noticia[1] . "</td>" . "<td><input type = submit name = 'eliminarNoticia' value = 'Eliminar'></td></tr></form> ";
		}
	}else{
		echo "<tr><td></td><td></td><td></td></tr>";
	}
}

function createTableDocumentos(){
	global $documentos;
	if(count($documentos) > 0){
		foreach ($documentos as $documento) {
			echo "<form method= 'POST'><tr> <input type='hidden' name='tituloDocumento' value='".$documento[0]."'><td>" . $documento[0] ."</td><td>" . $documento[1] . "</td>" . "<td><input type = submit name = 'eliminarDocumento' value = 'Eliminar'></td></tr></form> ";
		}
	}else{
		echo "<tr><td></td><td></td><td></td></tr>";
	}
}

function createTablePreguntas(){
	global $preguntas;
	if(count($preguntas) > 0){
		foreach ($preguntas as $pregunta) {
			echo "<form method= 'POST'><tr> <input type='hidden' name='Pregunta' value='".$pregunta[2]."'><td>" . $pregunta[0] ."</td><td>" . $pregunta[1] . "</td>" . "<td><input type = submit name = 'eliminarPregunta' value = 'Eliminar'></td></tr></form> ";
		}
	}else{
		echo "<tr><td></td><td></td><td></td></tr>";
	}
}

function createTableActividades(){
	global $actividades;
	if(count($actividades) > 0){
		foreach ($actividades as $actividad) {
			echo "<form method= 'POST'><tr> <input type='hidden' name='tituloActividad' value='".$actividad[0]."'><td>" . $actividad[0] ."</td><td>" . $actividad[1] . "</td>" . "<td><input type = submit name = 'eliminarActividad' value = 'Eliminar'></td></tr></form> ";
		}
	}else{
		echo "<tr><td></td><td></td>";
	}
}

function createTableGaleria(){
	global $galeria;
	if(count($galeria) > 0){
		foreach ($galeria as $foto) {
			echo "<form method= 'POST'><tr> <input type='hidden' name='pathImagen' value='". $foto[0]."'><td>" . '<li><a href="#img1"><img class= "imagenGaleria" src=' . $foto[0] . '></a></li>' ."</td>" . "<td><input type = submit name = 'eliminarImagen' value = 'Eliminar'></td></tr></form> ";
		}
	}
}

function obtenerDatosUsuario($nombreUsuario){
	return getDatosUsuario($nombreUsuario);
}

if(isset($_POST['eliminarActividad'])){
	$titulo = $_POST['tituloActividad'];
	eliminarActividad($titulo);
}

if(isset($_POST['eliminarDocumento'])){
	$titulo = $_POST['tituloDocumento'];
	eliminarDocumento($titulo);
}

if(isset($_POST['eliminarNoticia'])){
	$titulo = $_POST['tituloNoticia'];
	eliminarNoticia($titulo);
}

if(isset($_POST['eliminarPregunta'])){
	$titulo = $_POST['Pregunta'];
	eliminarPregunta($titulo);
}

if(isset($_POST['desactivarUsuario'])){
	$nombre = $_POST['nombreUsuario'];
	deshabilitarUsuario($nombre);
}

if(isset($_POST['activarUsuario'])){
	$nombre = $_POST['nombreUsuario'];
	habilitarUsuario($nombre);
}


if(isset($_POST['accesoUsuario'])){
	$nombre = $_POST['nombreUsuario'];
	accesoUsuario($nombre);
}

if(isset($_POST['accesoAdmin'])){
	$nombre = $_POST['nombreUsuario'];
	accesoAdministrador($nombre);
}


if(isset($_POST['eliminarImagen'])){
	$path = $_POST['pathImagen'];
	eliminarImagen($path);
}

/*
 * Crear Noticia
 */
if(isset($_POST['CrearNoticia'])){
	$tituloNoticia = $_POST['TituloNoticia'];
	$descripcionNoticia = $_POST['DescripcionNoticia'];
	$enlaceNoticia = $_POST['EnlaceNoticia'];
	$imagenNoticia = verifyImageUpload("assets/images/noticias/",'ImagenNoticia');
	registrarNoticia($tituloNoticia, $descripcionNoticia, $enlaceNoticia, $imagenNoticia);
}

/*
 * Crear Actividad
 */
if(isset($_POST['CrearActividad'])){
	$tituloActividad = $_POST['TituloActividad'];
	$descripcionActividad = $_POST['DescripcionActividad'];
	$imagenActividad = verifyImageUpload("assets/images/actividades/",'ImagenActividad');
	registrarActividad($tituloActividad, $descripcionActividad, $imagenActividad);
}

/*
 * Crear Documento
 */
if(isset($_POST['crearDocumento'])){
	$titulo = $_POST['tituloDocumento'];
	$descripcion = $_POST['descripcionDocumento'];
	$enlace = $_POST['enlaceDocumento'];
	registrarDocumento($titulo, $descripcion, $enlace);
}

/*
 * Crear Imagen
 */
if(isset($_POST['crearImagen'])){
	$ruta = verifyImageUpload("assets/images/galeria/",'rutaImagenGaleria');

	agregarImagen($ruta);
}

if(isset($_POST['registro'])){
	$nombreUsuario   =$_POST['username'];
	$correo          =$_POST['email'];
	$contrasena      =$_POST['pass'];
	$rcontrasena     =$_POST['passc'];
	$nombre          =$_POST['name'];
	$apellidos       =$_POST['lastname'];
	registrarse($nombreUsuario, $correo, $contrasena, $rcontrasena,  $nombre, $apellidos);
}

if(isset($_POST['login'])){
	$nombreUsuario = $_POST['username'];
	$contrasena = $_POST['pass'];
	iniciar_Sesion($nombreUsuario, $contrasena);
}

if(isset($_POST['actualizar'])){
	header("Location: actualizar.php");
}

if(isset($_POST['actualizarDatos'])){
	$usuarioActual = $_POST['usuarioActual'];
	$nuevoUsuario = $_POST['nusername'];
	$nuevoCorreo = $_POST['nemail'];
	$nuevaContrasena = $_POST['npass'];
	$rNuevaContrasena = $_POST['npassc'];
	$nuevoNombre = $_POST['nname'];
	$nuevosApellidos = $_POST['nlastname'];
	actualizarDatos($usuarioActual, $nuevoUsuario, $nuevoCorreo, $nuevaContrasena, $rNuevaContrasena, $nuevoNombre, $nuevosApellidos);
}


function verifyImageUpload($post, $imageInputName)
{
	var_dump($_FILES);
	$imageName = $_FILES[$imageInputName]['name'];
	$imageTempName = $_FILES[$imageInputName]['tmp_name'];

	if ($imageName != "") {
		$type = explode('.', $imageName);
		$type = strtolower($type[count($type) - 1]);

		// If there's an image to upload, the destination is set and the image is moved to
		// that destination.
		if (in_array($type, array('gif', 'jpg', 'jpeg', 'png'))) {
			$destination = $post . '/' . uniqid(rand()) . '.' . $type;

			move_uploaded_file($imageTempName, $destination);
		} else {
			// If the user tries to upload anything else that is not an image, an
			// error message appears and the function returns null.
			echo '<div class="alert alert-danger" role="alert">You just can upload ".gif", ".jpg", ".jpeg" and ".png" files</div>';
			return null;
		}
	} else { // If there's not an image to upload, the destination is empty.
		$destination = "null";
	}
	return $destination;
}



?>
