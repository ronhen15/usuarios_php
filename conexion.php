<?php 
$hostbd = "localhost";
$userbd = "root";
$pwbd = "";
$nombrebd = "usuarios";

$connexion = new mysqli($hostbd, $userbd, $pwbd, $nombrebd);
if (!$connexion) {
	echo 'Falla de Conexion';
	
}



 ?>