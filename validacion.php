<?php 
require_once("administrador/conexion.php");
	$correo=$_POST['user'];
	$pass=$_POST['pass'];

	$consulta = "SELECT * FROM clientes WHERE correo = '$correo' AND password = '$pass'";
	if ($resultado = $con->query($consulta)) {
		while ($row = $resultado->fetch_array()) {
			$usuario = $row['correo'];
			$contra = $row['password'];
			$id = $row['id'];
		}$resultado->close();
	}
		$con->close();
	if (isset($correo) && isset($pass)) {
		if ($correo == $usuario && $pass == $contra) {
			session_start();
			$_SESSION["logueado"];
			header("Location: index_user.php?id=$id");
		}else{
			header("Location: index.php?error=login");
		}
}
?>
