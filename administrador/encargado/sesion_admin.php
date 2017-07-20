<?php
require_once("conexion.php");
	$correo=$_POST['correo'];
	$pass=$_POST['pass'];

	$consulta = "SELECT * FROM administrador WHERE correo = '$correo' AND password = '$pass'";
	if ($resultado = $con->query($consulta)) {
		while ($row = mysqli_fetch_array($resultado)) {
			$usuario = $row['correo'];
			$contra = $row['password'];
			$id = $row['id'];
			$permiso = $row['id_permiso'];
		}
	}
	if (isset($correo) && isset($pass)) {
		if ($correo == $usuario && $pass == $contra) {
			if ($permiso == 1) {
				header("Location: admin.php?id=$id");
			}else{
				header("Location: encargado/encargado_index.php?id=$id");
			}

		}else{
			header("Location: index.php");
		}
}

?>
