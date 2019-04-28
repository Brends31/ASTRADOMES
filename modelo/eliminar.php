<?php  
	require_once("../modelo/conexion.php");
    $connect = conectar();


	function eliminarNoticia($nombre){
		global $connect;
        $sql = 'CALL Eliminar_Noticia(?)';
		$stmt = $connect->prepare($sql);
		$stmt->bindParam(1,$nombre, PDO::PARAM_STR|PDO::PARAM_INPUT_OUTPUT, 100);
        $stmt->execute();
        header("Location:../vista/admin_Noticias.php");
	}

	function eliminarDocumento($nombre){
        global $connect;
        $sql = 'CALL Eliminar_Documento(?)';
		$stmt = $connect->prepare($sql);
		$stmt->bindParam(1,$nombre, PDO::PARAM_STR|PDO::PARAM_INPUT_OUTPUT, 100);
        $stmt->execute();	
        header("Location:../vista/admin_DocumentosLey.php");
	}

	function eliminarPregunta($key){
        global $connect;
        $sql = 'CALL Eliminar_Pregunta(?)';
        $stmt = $connect->prepare($sql);
        $stmt->bindParam(1,$key, PDO::PARAM_STR|PDO::PARAM_INPUT_OUTPUT, 100);
        $stmt->execute();
        header("Location:../vista/admin_FAQ.php");
    }

	function eliminarImagen($path){
        global $connect;
        $sql = 'CALL Eliminar_Imagen(?)';
		$stmt = $connect->prepare($sql);
		$stmt->bindParam(1,$path, PDO::PARAM_STR|PDO::PARAM_INPUT_OUTPUT, 100);
        $stmt->execute();	
        header("Location:../vista/admin_Galeria.php");	
	}

	function eliminarActividad($nombre){
        global $connect;
        $sql = 'CALL Eliminar_Actividad(?)';
		$stmt = $connect->prepare($sql);
		$stmt->bindParam(1,$nombre, PDO::PARAM_STR|PDO::PARAM_INPUT_OUTPUT, 100);
        $stmt->execute();	
        header("Location:../vista/admin_Actividades.php");
	}

	function deshabilitarUsuario($username){

        global $connect;
        $sql = 'CALL Deshabilitar_Usuario(?)';
		$stmt = $connect->prepare($sql);
		$stmt->bindParam(1,$username, PDO::PARAM_STR|PDO::PARAM_INPUT_OUTPUT, 100);
        $stmt->execute();
        header("Location:../vista/admin_Usuarios.php");
	}

	

?>