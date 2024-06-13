<?php 
	if (!empty($_POST["login"])) {
	if (empty($_POST["user"]) || empty($_POST["pass"])){
		echo "<p class='text-bg-danger text-center'>*Todos los campos son Obligatorios</p>";
		
	}
	else{
		
		$user = $_POST["user"];
		$pass = $_POST["pass"];

		$sql = $connexion->query("select * from registro_usuario where user='$user' AND clave='$pass'");
		if ($sql->fetch_object()) {
			header("location:inicio.php");
			
		}else{
			echo "<p class='text-bg-danger text-center'>Acceso No Autorizado</p>";

		}
		
	}
}



 ?>