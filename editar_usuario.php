<?php 

	include "config/conexion.php";
	$id=$_GET['id'];
	

	$sql = $connexion->query(" select * FROM registro_usuario WHERE Id=$id ");
?>


<!DOCTYPE html>
<html lang="ES">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<title>Actualizacion de Usuarios</title>
</head>
<body>
	
	<div class="container bg-light my-4">
	<h2 class="text-center">Actualización de Usuarios</h2>
	<?php 
	include "actualizarusuario.php";

		while ($datos=$sql->fetch_object()) {

			?>

		<form action="" method="POST">
		Nombre: <input class="form-control" type="text" name="nombre" value="<?= $datos->nombre ?>"><br>
		Apellido: <input class="form-control" type="text" name="apellido" value="<?= $datos->apellido ?>"><br>
		Usuario: <input class="form-control" type="text" name="user" value="<?= $datos->user ?>"><br>
		Correo:	<input class="form-control" type="email" name="correo" value="<?= $datos->correo ?>"><br>
		Contraseña: <input class="form-control" type="password" name="clave" value="<?= $datos->clave ?>"><br>
		
		<div class="container text-center"><input type="submit" class="btn btn-secondary" name="actualizar" value="Actualizar">
		<a href="listarUsuarios.php"  class="btn btn-info">Volver</a></div>	
	</form>

		    
		<?php }

	
		
	 ?>
	
	</div>
</body>
</html>