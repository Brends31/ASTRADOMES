<?php  
	require_once("../modelo/conexion.php");

	$connect = conectar();

	function registrarActividad($titulo, $descripcion, $path){
		if(validar($titulo) && validar($descripcion)){

			$fecha = date('j/m/y'); 
		    global $connect;
		    $sql = 'CALL Agregar_Actividad(?,?,?,?)';
			$stmt = $connect->prepare($sql);
			$stmt->bindParam(1,$titulo, PDO::PARAM_STR|PDO::PARAM_INPUT_OUTPUT, 200);
		    $stmt->bindParam(2,$descripcion, PDO::PARAM_STR|PDO::PARAM_INPUT_OUTPUT, 1000);
		    $stmt->bindParam(3,$path, PDO::PARAM_STR|PDO::PARAM_INPUT_OUTPUT, 200);
		    $stmt->bindParam(4,$fecha,  PDO::PARAM_STR|PDO::PARAM_INPUT_OUTPUT, 200);
			$stmt->execute();

			header("Location:../vista/admin_Actividades.php");
		}
	}

	function registrarNoticia($titulo, $descripcion, $enlace, $ruta){
		if(validar($titulo) && validar($descripcion)){

			$fecha = date('j/m/y');

			global $connect;
	        $sql = 'CALL Agregar_Noticia(?,?,?,?,?)';
			$stmt = $connect->prepare($sql);


			$stmt->bindParam(1,$titulo, PDO::PARAM_STR|PDO::PARAM_INPUT_OUTPUT, 100);
	        $stmt->bindParam(2,$descripcion, PDO::PARAM_STR|PDO::PARAM_INPUT_OUTPUT, 500);
	        $stmt->bindParam(3,$enlace, PDO::PARAM_STR|PDO::PARAM_INPUT_OUTPUT, 1000);
	        $stmt->bindParam(4,$ruta,  PDO::PARAM_STR|PDO::PARAM_INPUT_OUTPUT, 1000);
	        $stmt->bindParam(5,$fecha,  PDO::PARAM_STR|PDO::PARAM_INPUT_OUTPUT, 200);
	        
			$stmt->execute();

			header("Location:../vista/admin_Noticias.php");
		}
	}

	function registrarPregunta($pregunta, $respuesta){
		if(validar($pregunta) && validar($respuesta)){
			global $connect;
			$sql = 'CALL Agregar_FAQ(?,?)';
			$stmt = $connect->prepare($sql);


			$stmt->bindParam(1,$pregunta, PDO::PARAM_STR|PDO::PARAM_INPUT_OUTPUT, 100);
			$stmt->bindParam(2,$respuesta, PDO::PARAM_STR|PDO::PARAM_INPUT_OUTPUT, 500);

			$stmt->execute();

			header("Location:../vista/admin_FAQ.php");
		}
	}

	function registrarDocumento($titulo, $descripcion, $enlace){
		if(validar($titulo) && validar($descripcion) && validar($enlace)){

			$fecha = date('j/m/y');

			global $connect;
	        $sql = 'CALL Agregar_Documento(?,?,?,?)';
			$stmt = $connect->prepare($sql);
			$stmt->bindParam(1,$titulo, PDO::PARAM_STR|PDO::PARAM_INPUT_OUTPUT, 100);
	        $stmt->bindParam(2,$descripcion, PDO::PARAM_STR|PDO::PARAM_INPUT_OUTPUT, 500);
	        $stmt->bindParam(3,$enlace, PDO::PARAM_STR|PDO::PARAM_INPUT_OUTPUT, 200);
	        $stmt->bindParam(4,$fecha,  PDO::PARAM_STR|PDO::PARAM_INPUT_OUTPUT, 200);
			$stmt->execute();
			header("Location:../vista/admin_DocumentosLey.php");
		}

	}

	function habilitarUsuario($username){
		if(validar($username)){
			global $connect;
	        $sql = 'CALL Habilitar_Usuario(?)';
			$stmt = $connect->prepare($sql);
			$stmt->bindParam(1,$username, PDO::PARAM_STR|PDO::PARAM_INPUT_OUTPUT, 100);
	        $stmt->execute();
	        header("Location:../vista/admin_Usuarios.php");
	    }
	}

	function validar($form){
		if($form == ""){
			return false;
		}
		return true;
	}

	function agregarImagen($path){
		if(validar($path)){
			global $connect;
	        $sql = 'CALL Agregar_Imagen(?)';
			$stmt = $connect->prepare($sql);
			$stmt->bindParam(1,$path, PDO::PARAM_STR|PDO::PARAM_INPUT_OUTPUT, 100);
	        $stmt->execute();	
	        header("Location:../vista/admin_Galeria.php");
    	}
	}

	function accesoAdministrador($username){
		if(validar($username)){
			global $connect;
	        $sql = 'CALL Acceso_Administrador(?)';
			$stmt = $connect->prepare($sql);
			$stmt->bindParam(1,$username, PDO::PARAM_STR|PDO::PARAM_INPUT_OUTPUT, 100);
	        $stmt->execute();
	        header("Location:../vista/admin_Usuarios.php");
	    }
	}

	function accesoUsuario($username){
		if(validar($username)){
			global $connect;
	        $sql = 'CALL Acceso_Usuario(?)';
			$stmt = $connect->prepare($sql);
			$stmt->bindParam(1,$username, PDO::PARAM_STR|PDO::PARAM_INPUT_OUTPUT, 100);
	        $stmt->execute();
	        header("Location:../vista/admin_Usuarios.php");
	    }
	}

	function actualizarCorreo($usuarioActual, $nuevoCorreo){
		if ($nuevoCorreo != '') {
			if(validar_Correo($nuevoCorreo)) {
				global $connect;
				$sql = 'CALL Actualizar_Correo(?,?)';
				$stmt = $connect->prepare($sql);
				$stmt->bindParam(1,$usuarioActual, PDO::PARAM_STR|PDO::PARAM_INPUT_OUTPUT, 200);
			    $stmt->bindParam(2,$nuevoCorreo, PDO::PARAM_STR|PDO::PARAM_INPUT_OUTPUT, 200);
				$stmt->execute();
			}

			else {
				echo ' <script language="javascript">alert("El correo ya existe");</script> ';
			}
		}
	}

	function actualizarContrasena($usuarioActual, $nuevaContrasena, $rNuevaContrasena){

		if ($nuevaContrasena != '') {
			if ($nuevaContrasena == $rNuevaContrasena){
				if (validar_Contrasena($nuevaContrasena)) {
					$contrasenaEncriptada = password_hash($nuevaContrasena, PASSWORD_DEFAULT);
					global $connect;
					$sql = 'CALL Actualizar_Contrasenna(?,?)';
					$stmt = $connect->prepare($sql);
					$stmt->bindParam(1,$usuarioActual, PDO::PARAM_STR|PDO::PARAM_INPUT_OUTPUT, 200);
				    $stmt->bindParam(2,$contrasenaEncriptada, PDO::PARAM_STR|PDO::PARAM_INPUT_OUTPUT, 1000);
					$stmt->execute();
				}

				else {
					echo ' <script language="javascript">alert("La contraseña debe tener al menos un caracter  en mayuscula y miniscula, 8 caracteres como minimo");</script> ';
				}

			}

			else {
				echo ' <script language="javascript">alert("Las contraseñas no coinciden");</script> ';
			}
		}

	}

	function actualizarNombre($usuarioActual, $nuevoNombre){

		if ($nuevoNombre != '') {
			global $connect;
			$sql = 'CALL Actualizar_Nombre(?,?)';
			$stmt = $connect->prepare($sql);
			$stmt->bindParam(1,$usuarioActual, PDO::PARAM_STR|PDO::PARAM_INPUT_OUTPUT, 200);
			$stmt->bindParam(2,$nuevoNombre, PDO::PARAM_STR|PDO::PARAM_INPUT_OUTPUT, 200);
			$stmt->execute();
		}

	}

	function actualizarApellido($usuarioActual, $nuevosApellidos) {

		if ($nuevosApellidos != '') {
			global $connect;
			$sql = 'CALL Actualizar_Apellido(?,?)';
			$stmt = $connect->prepare($sql);
			$stmt->bindParam(1,$usuarioActual, PDO::PARAM_STR|PDO::PARAM_INPUT_OUTPUT, 200);
			$stmt->bindParam(2,$nuevosApellidos, PDO::PARAM_STR|PDO::PARAM_INPUT_OUTPUT, 200);
			$stmt->execute();
		}
	}

	function actualizarUsuario($usuarioActual, $nuevoUsuario) {

		if ($nuevoUsuario != '') {
			if(validar_Usuario($nuevoUsuario)) {
				global $connect;
				$sql = 'CALL Actualizar_Usuario(?,?)';
				$stmt = $connect->prepare($sql);
				$stmt->bindParam(1,$usuarioActual, PDO::PARAM_STR|PDO::PARAM_INPUT_OUTPUT, 200);
			    $stmt->bindParam(2,$nuevoUsuario, PDO::PARAM_STR|PDO::PARAM_INPUT_OUTPUT, 200);
				$stmt->execute();

				session_start();
				$_SESSION['usuario'] = $nuevoUsuario;
			} 

			else {
				echo ' <script language="javascript">alert("El usuario ya existe");</script> ';
			}
		}

	}

	function actualizarDatos($usuarioActual, $nuevoUsuario, $nuevoCorreo, $nuevaContrasena, $rNuevaContrasena, $nuevoNombre, $nuevosApellidos) {

		actualizarCorreo($usuarioActual, $nuevoCorreo);
		actualizarContrasena($usuarioActual, $nuevaContrasena, $rNuevaContrasena);
		actualizarNombre($usuarioActual, $nuevoNombre);
		actualizarApellido($usuarioActual, $nuevosApellidos);
		actualizarUsuario($usuarioActual, $nuevoUsuario);
		
	}

	/*--------------------------------------------Registro------------------------------------------------------*/

	function validar_Usuario($nombreUsuario){
		global $connect;

	    $sql = 'SELECT Validar_Usuario(?)';
		$stmt = $connect->prepare($sql);
		$stmt->bindParam(1, $nombreUsuario, PDO::PARAM_STR|PDO::PARAM_INPUT_OUTPUT, 1);
		$stmt->execute();

		$resultado = $stmt->fetchAll();
		$disponible = $resultado[0][0];  //si da cero significa que no está disponible entonces el usuario existe

		return $disponible;
	}
    
    function validar_Correo($correo){
		global $connect;

	    $sql = 'SELECT Validar_Email(?)';
		$stmt = $connect->prepare($sql);
		$stmt->bindParam(1, $correo, PDO::PARAM_STR|PDO::PARAM_INPUT_OUTPUT, 1);
		$stmt->execute();

		$resultado = $stmt->fetchAll();
		$disponible = $resultado[0][0];  //si da cero significa que no está disponible entonces el usuario existe

		return $disponible;
    }

	function validar_Contrasena($contrasena){
	    if(strlen($contrasena) < 8  or !preg_match('`[a-z]`',$contrasena) or !preg_match('`[A-Z]`',$contrasena) or 
	    	!preg_match('`[0-9]`',$contrasena)){
	        return false;
	    }
	    else{ 
            return true;
        }
	}

	function registrar_Usuario($nombreUsuario, $correo, $contrasena,  $nombre, $apellidos){

		global $connect;

		$sql = 'CALL Agregar_Usuario(?,?,?,?,?)';
		$stmt = $connect->prepare($sql);
		$stmt->bindParam(1,$nombreUsuario, PDO::PARAM_STR|PDO::PARAM_INPUT_OUTPUT, 100);
		$stmt->bindParam(2,$correo, PDO::PARAM_STR|PDO::PARAM_INPUT_OUTPUT, 100);
		$stmt->bindParam(3,$contrasena, PDO::PARAM_STR|PDO::PARAM_INPUT_OUTPUT, 1000);
		$stmt->bindParam(4,$nombre, PDO::PARAM_STR|PDO::PARAM_INPUT_OUTPUT, 100);
		$stmt->bindParam(5,$apellidos, PDO::PARAM_STR|PDO::PARAM_INPUT_OUTPUT, 100);
		$stmt->execute();

	}

	function registrarse($nombreUsuario, $correo, $contrasena, $rcontrasena,  $nombre, $apellidos){
		if($contrasena==$rcontrasena){
				if(validar_Usuario($nombreUsuario)) { // El nombre de Usuario debe ser único.
                    if(validar_Correo($correo)) { // El correo debe ser único.
                        if(validar_Contrasena($contrasena)){
                            
                            $contrasenaEncriptada = password_hash($contrasena, PASSWORD_DEFAULT);
                            registrar_Usuario($nombreUsuario, $correo, $contrasenaEncriptada,  $nombre, $apellidos);
                            echo ' <script language="javascript">alert("Usuario registrado con éxito");</script> ';
                            header("Location: login.php");	
                            
                        }else{
                            echo ' <script language="javascript">alert("La contraseña debe tener al menos un caracter  en mayuscula y miniscula, 8 caracteres como minimo");</script> ';
                        }
                    }else{
                        echo ' <script language="javascript">alert("El correo ya se encuentra registrado");</script> ';
                    }

                }else{
                    echo ' <script language="javascript">alert("El usuario ya existe");</script> ';
                }    
        }else{
            echo ' <script language="javascript">alert("Las contraseñas no coinciden");</script> ';
        }
   	}
?>

	