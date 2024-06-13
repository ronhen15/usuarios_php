<?php 
	include("conexion.php");
	

	if (($_SERVER['REQUEST_METHOD'] === 'POST') || (!empty($_POST['enviar']))){
		if (empty($_POST['nombre']) && empty($_POST['mensaje'])) {
			echo("<p class='alert alert-danger'>*El comentario no se puede enviar vacio</p>");
			$_POST['nombre']=null;
			
		}
		else{

		$nombre = $_POST["nombre"];
		$mensaje = $_POST["mensaje"];
		$fecha=date('Y-m-d H:i:s');
		$sql = $connexion->query("INSERT INTO comentarios(ID, Nombre, Mensaje, Fecha) VALUES ('','$nombre','$mensaje','$fecha')");
		if ($sql==1){
			echo "<p class='text-bg-success text-center'>Comentario publicado satisfactoriamente</p>";
			
			
		}else{
			echo "<p class='text-bg-danger text-center'>Comentario no pudo ser publicado</p>";

		}
	}
	}


 ?>