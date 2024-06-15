<?php 
	if (!empty($_GET['id'])) {
		$id=$_GET['id'];
		include("config/conexion.php");
		$sql=$connexion->query("DELETE FROM registro_usuario WHERE Id=$id");
		if ($sql==1) {
			echo("<p class='alert alert-success'>Usuario Eliminado Exitosamente</p>");
			
		} else {
			echo("<p class='alert alert-danger'>Error al Eliminar usuario</p>");
			
		}
		
	}

 ?>