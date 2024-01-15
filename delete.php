<?php
	session_start();
	include 'database.php';

	if(isset($_GET['id'])){
		try{
			$sql = "DELETE FROM estudiante WHERE id = '".$_GET['id']."'";
			//if-else statement in executing our query
			$_SESSION['message'] = ( $conn->exec($sql) ) ? 'Estudiante eliminado' : 'Algo acaba de ocurrir. No se pudo eliminar al estudiante.';
		}
		catch(PDOException $e){
			$_SESSION['message'] = $e->getMessage();
		}


	}
	else{
		$_SESSION['message'] = 'Selecciona el estudiante a eliminar';
	}

	header('location: ingresar_estudiantes.php');

?>