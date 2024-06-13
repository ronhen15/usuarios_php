<?php  
if (!empty($_POST["submit"])) {
	if (empty($_POST["nombre"]) || empty($_POST["apellido"]) || empty($_POST["user"]) || empty($_POST["clave"])){
		echo "<p class='text-bg-danger text-center'>*Todos los campos son Obligatorios</p>";
		
	}
	else{
		$nombre = $_POST['nombre'];
		$apellido = $_POST['apellido'];
		$user = $_POST['user'];
		$correo = $_POST['correo'];
		$clave = password_hash($_POST['clave'], PASSWORD_DEFAULT);

		$sql = $connexion->query("INSERT INTO registro_usuario(nombre, apellido, user, correo, clave) VALUES ('$nombre','$apellido','$user','$correo','$clave')");
		if ($sql==1) {
			echo "<p class='text-bg-success text-center'>Usuario Registrado Correctamente</p>";
			
		}else{
			echo "<p class='alert alert-danger'>Usuario No Registrado</p>";

			}
	
		}
	}

 ?>