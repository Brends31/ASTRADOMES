<?php 
	require_once("conexion.php");
	$sesion_Activa = 0;

    $connect = conectar();
/*--------------------------------------------Obtener Datos-----------------------------------------------------*/
	function getNoticias(){
        global $connect;
	    $sql = 'CALL Obtener_Noticias()';
	    $stmt = $connect->prepare($sql);
	    $stmt->execute();
	    $resultado = $stmt->fetchAll();
        return $resultado;
    }

    function getUsuarios(){
        global $connect;

        $sql = 'CALL Obtener_Usuarios()';
		$stmt = $connect->prepare($sql);
		$stmt->execute();
        $resultado = $stmt->fetchAll();
        return $resultado;

    }

    function getFAQ(){
        global $connect;
        $sql = 'CALL Obtener_FAQ()';

        $stmt = $connect->prepare($sql);
        $stmt->execute();
        $resultado = $stmt->fetchAll();
        return $resultado;
    }

    function getActividades(){
        global $connect;

	    $sql = 'CALL Obtener_Actividades()';
	    $stmt = $connect->prepare($sql);
	    $stmt->execute();
	    $resultado = $stmt->fetchAll();
        return $resultado;

    }

    function getDocumentos(){
	    global $connect;

	    $sql = 'CALL Obtener_Documentos()';
	    $stmt = $connect->prepare($sql);
	    $stmt->execute();
	    $resultado = $stmt->fetchAll();
        return $resultado;

    }



    function getGaleria(){
        global $connect;
        $sql = 'CALL Obtener_Galeria()';
		$stmt = $connect->prepare($sql);
		$stmt->execute();
        $resultado = $stmt->fetchAll();
        return $resultado;    	
    }

    function getTipoUsuario($nombreUsuario) {
        global $connect;
    	$sql = 'SELECT 	Obtener_Tipo_Usuario(?)';
		$stmt = $connect->prepare($sql);
		$stmt->bindParam(1, $nombreUsuario, PDO::PARAM_STR|PDO::PARAM_INPUT_OUTPUT, 200);
		$stmt->execute();
		$resultado = $stmt->fetchAll();
		$tipo_Usuario = $resultado[0][0];

		return $tipo_Usuario;

    }

    function getDatosUsuario($nombreUsuario) {
        global $connect;
    	$sql = 'CALL Obtener_Datos_Usuario(?)';
		$stmt = $connect->prepare($sql);
		$stmt->bindParam(1, $nombreUsuario, PDO::PARAM_STR|PDO::PARAM_INPUT_OUTPUT, 200);
		$stmt->execute();
		$resultado = $stmt->fetchAll();
		$tipo_Usuario = $resultado;

		return $tipo_Usuario;

    }



/*--------------------------------------------Login-------------------------------------------------------*/

	function iniciar_Sesion($nombreUsuario, $contrasena){
		
			
		$resultado = validar_Login($nombreUsuario, $contrasena);
    
        
        if($resultado == 1){
        	session_start();
			$_SESSION['usuario'] = $nombreUsuario;

			$tipo_Usuario = getTipoUsuario($nombreUsuario);

			if ($tipo_Usuario == "Administrador") {
				header("Location: admin_Index.php");
			}

			else{
				header("Location: index.php");
			}
        	
        }

        if($resultado == 2){
			echo ' <script language="javascript">alert("La contraseña es incorrecta");</script> ';
		}

		if($resultado == 3){
			echo ' <script language="javascript">alert("El usuario y la contraseña son incorrectos");</script> ';
		}
        if($resultado == 4){
			echo ' <script language="javascript">alert("El usuario no existe");</script> ';
		}

		if($resultado == 5){
			echo ' <script language="javascript">alert("El usuario ha sido deshabilitado");</script> ';
		}

		//session_destroy();

    }

    function validar_Login($nombreUsuario, $contrasena){


        global $connect;

	    $sql = 'SELECT Validar_Usuario(?)';
		$stmt = $connect->prepare($sql);
		$stmt->bindParam(1, $nombreUsuario, PDO::PARAM_STR|PDO::PARAM_INPUT_OUTPUT, 1);
		$stmt->execute();

		$resultado = $stmt->fetchAll();
		$disponible = $resultado[0][0];  //si da cero significa que no está disponible entonces el usuario existe

		$sql = 'SELECT Usuario_Activo(?)';
		$stmt = $connect->prepare($sql);
		$stmt->bindParam(1, $nombreUsuario, PDO::PARAM_STR|PDO::PARAM_INPUT_OUTPUT, 1);
		$stmt->execute();

		$resultado = $stmt->fetchAll();
		$activo = $resultado[0][0];

        $contrasenaCorrecta = 0;

        if($disponible == 0){
        	$sql = 'SELECT Obtener_Contrasenna(?)';
			$stmt = $connect->prepare($sql);
			$stmt->bindParam(1, $nombreUsuario, PDO::PARAM_STR|PDO::PARAM_INPUT_OUTPUT, 1);
			$stmt->execute();
			$resultado = $stmt->fetchAll();
			$contrasenaEncriptada = $resultado[0][0]; 
			if(password_verify($contrasena, $contrasenaEncriptada)){
				$contrasenaCorrecta= 1;
			}
        }
        

		if($activo != 0){ 
			if($disponible == 0 and $contrasenaCorrecta == 1 ){  //correcto
				$resultadoFinal = 1;
			}

			else if($contrasenaCorrecta == 0 ){
				$resultadoFinal = 2;              //El password esta mal!!
			}

			else if($disponible == 1 and $contrasenaCorrecta == 0){    //Ambos estan mal.
				$resultadoFinal = 3;
			}
	        else{
	            $resultadoFinal = 4;
	        }
	    }

	    else{
	    	$resultadoFinal = 5;
	    }
		return $resultadoFinal;
	}




