<?php 
	include ("config/conexion.php");
	if (!empty($_POST['actualizar'])) {
		if (empty($_POST["nombre"]) || empty($_POST["apellido"]) || empty($_POST["user"]) || empty($_POST["clave"])){
		echo "<p class='text-bg-danger text-center'>*Todos los campos son Obligatorios</p>";
			
		} else {
			$nombre=$_POST['nombre'];
			$apellido=$_POST['apellido'];
			$user=$_POST['user'];
			$correo=$_POST['correo'];
			$clave=$_POST['clave'];
			$ID=$_GET['id'];

			
				$modificar=$connexion->query("UPDATE registro_usuario SET nombre='$nombre',apellido='$apellido',user='$user',correo='$correo',clave='$clave' WHERE Id='$ID'");
				if ($modificar==1) {
					echo "<p class='alert alert-warning'>El usuario ha sido Actualizado</p>";

					
				}else {
					echo "<p class='alert alert-warning'>El usuario no pudo ser actualizado</p>";
				}


				
			}
		}
		
	


 ?>