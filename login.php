<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
	<title>Inicio de sesion</title>
</head>
<body>
	
	

<div class="container my-2 bg-light text-center">


	<h2 class="text-center">Inicio de Sesion</h2>
	<form action="" method="POST">
	<img src="img/user4.png" alt="">
	<div class="user">
		<i class="bi bi-person"></i>
		<input class="form-group" type="text" name="user">
	</div>

	<div class="pass">
		<i class="bi bi-lock"></i>
		<input class="form-group" type="Password" name="pass">
	</div>
	<div class="cuenta">
		<a href="index.php">Crear Cuenta</a>
		<a href="">Olvide la Contraseña</a>

	</div>
	<input type="submit" name="login" class="btn btn-primary w-25" value="Login">
	</form>
	<div class="container">
	<?php 
		include("conexion.php");
		include("validar_user.php");
	 ?>
</div>
</div>




</body>
</html>