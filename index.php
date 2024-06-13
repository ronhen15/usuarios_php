<!DOCTYPE html>
<html lang="ES">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<title>Registro Usuarios</title>
</head>
<body>
	
	<div class="container bg-light my-4">
	<h2 class="text-center">Registro de Usuarios</h2>
	<form action="" method="POST">
		Nombre: <input class="form-control" type="text" name="nombre"><br>
		Apellido: <input class="form-control" type="text" name="apellido"><br>
		Usuario: <input class="form-control" type="text" name="user"><br>
		Correo:	<input class="form-control" type="email" name="correo"><br>
		Contraseña: <input class="form-control" type="password" name="clave"><br>
		<input type="submit" class="btn btn-secondary" name="submit" value="Registrar">
		<div><a href="login.php">Iniciar Sesion</a></div>

	</form>
	<?php 
		include("conexion.php");
		include("registrar.php");
	 ?>



	</div>
</body>
</html>