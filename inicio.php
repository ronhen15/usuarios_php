<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
	<title>inicio</title>
</head>
<body>
	<div class="container">
	<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">DESING</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Pagina Principal</a>
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
	<div id="carouselExampleIndicators" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://hips.hearstapps.com/hmg-prod/images/casa-cerramientos-technal1-1622547189.jpg?crop=1.00xw:0.753xh;0,0.184xh&resize=980:*" class="d-block w-100" alt="..." style="height: 550px;">
    </div>
    <div class="carousel-item">
      <img src="https://realidadarquitectonica.com/wp-content/uploads/2022/12/OLIVOS-04.jpg" class="d-block w-100" alt="..." style="height: 550px;">
    </div>
    <div class="carousel-item">
      <img src="https://p4.wallpaperbetter.com/wallpaper/964/525/304/house-pool-swimming-pool-luxury-wallpaper-preview.jpg" class="d-block w-100" alt="..." style="height: 550px;">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
	


</div>
<div class="container">
	<div class="card mb-3 my-2">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="https://www.comunicare.es/wp-content/uploads/2022/01/diseno-web-marketing-digital-cordoba-1.jpg" class="img-fluid rounded" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Diseño de proyectos</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

        <p class="card-text"><small class="text-body-secondary">Actualizado el 11/06/2024</small></p>
      </div>
    </div>
  </div>
</div>

</div>

<div class="container d-flex justify-content-center flex-column">
	<div>
<h2 class="text-center">Comentarios</h2>
</div>
<div>
<form method="POST" action="">
	Nombre: <br><input type="" name="nombre">
	<br>
	Mensaje:<br><textarea rows="5" placeholder="Escriba su Mensaje" style="min-width: 100%;" name="mensaje"></textarea>
	<br>
	<button type="submit" name="enviar" value="Enviar Comentario" class="btn btn-outline-dark">Enviar comentario</button>

</form>
</div>
</div>
<div class="container bg-body-tertiary border-info">
<?php 
	include("comment.php");
	include("conexion.php");

	
	$sql= 'SELECT * FROM comentarios';
	$resultado= mysqli_query($connexion, $sql);
	while ($comentarios = mysqli_fetch_object($resultado)){

		echo "<p class='border-success'> <strong>$comentarios->Nombre </strong> . $comentarios->Fecha .  Comentó:</p>";
		echo "<p class ='border-success'><pre> $comentarios->Mensaje</pre></p>";
		echo '<hr>';

	    
	}

  
 ?>
 </div>

<div class="container bg-body-tertiary">
	<p class="text-center">&copy Derechos Reservados </p>
	<div class="text-center" >
	<a href=""><i class="bi bi-instagram p-2 mx-3 p-2 mx-3"></i></a>
	<a href=""><i class="bi bi-google p-2 mx-3"></i></a>
	<a href=""><i class="bi bi-youtube p-2 mx-3"></i></a>
	<a href=""><i class="bi bi-android2 p-2 mx-3"></i></a>
	</div>
</div>


<script src="js/bootstrap.bundle.min.js"></script>

</body>
</html>