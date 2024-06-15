<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
	<title>Listar Usuarios</title>


</head>
<body>
	<div class="container">
	<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="inicio.php">DESING</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="inicio.php">Pagina Principal</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Galeria</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Blog</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
            Gestion de Usuarios
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="index.php">Crear Usuario</a></li>
            <li><a class="dropdown-item" href="listarUsuarios.php">Listar Usuarios</a></li>
            <li><a class="dropdown-item" href="cerrar_sesion.php">Cerrar Sesion</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
</div>
<div class="container">
		<div class="container my-2 bg-light text-center">

 		<?php 
 		include "eliminar_usuario.php";
 		include "config/conexion.php";
 		 ?>
 	</div>

	<h1 class="text-center">Listado de Usuarios</h1>
	<div class="container d-flex justify-content-between">
	
	<h3>Usuarios</h3>
	<a href="index.php" class="btn btn-dark align-content-end">Crear Usuarios</a>
	</div>
	<table class="table">
			
		<tr>
			<th>ID</th>
			<th>Nombre</th>
			<th>Apellido</th>
			<th>Usuario</th>
			<th>Correo</th>
			<th>Contraseña</th>
			<th>Acciones</th>
		</tr>
		
	<?php

	
	$sql = $connexion->query("select * from registro_usuario");
	
	while ($usuarios = $sql->fetch_object()){
		
		echo "<tr>
				<td> $usuarios->Id </td>
				<td> $usuarios->nombre </td>
				<td> $usuarios->apellido </td>
				<td> $usuarios->user </td>
				<td> $usuarios->correo </td>
				<td> $usuarios->clave </td>
				<td> 
					<a href='editar_usuario.php?id=$usuarios->Id' class='btn btn-outline-warning m-1' data-toggle='modal' data-target='#exampleModal'><i class='bi bi-pencil-square'></i></a>
					<a href='listarUsuarios.php?id=$usuarios->Id' class='btn btn-outline-danger m-1'><i class='bi bi-trash'></i></a>
				</td>
		</tr>";


		}

 		
  
 	?>
 
 </table>



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Actualizar Usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php 

		while ($datos=$sql->fetch_object()) {

			?>

		<form action="" method="POST">
		Nombre: <input class="form-control" type="text" name="nombre" value="<?= $datos->nombre ?>"><br>
		Apellido: <input class="form-control" type="text" name="apellido" value="<?= $datos->apellido ?>"><br>
		Usuario: <input class="form-control" type="text" name="user" value="<?= $datos->user ?>"><br>
		Correo:	<input class="form-control" type="email" name="correo" value="<?php $datos->correo ?>"><br>
		Contraseña: <input class="form-control" type="password" name="clave" value="<?php $datos->clave ?>"><br>
		
		
	</form>
			<?php } ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Actualizar</button>
      </div>
    </div>
  </div>
</div>
 	

 	</div>


 	<div class="container bg-body-tertiary">
 	<div class="text-center" >
		<a href=""><i class="bi bi-instagram p-2 mx-3 p-2 mx-3"></i></a>
		<a href=""><i class="bi bi-google p-2 mx-3"></i></a>
		<a href=""><i class="bi bi-youtube p-2 mx-3"></i></a>
		<a href=""><i class="bi bi-android2 p-2 mx-3"></i></a>
	</div>
	<p class="text-center">&copy Derechos Reservados</p>

</div>


<script src="js/bootstrap.bundle.min.js"></script>

</body>
</html>
