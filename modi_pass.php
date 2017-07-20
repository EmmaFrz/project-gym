<?php 
require_once("administrador/conexion.php");

$id = $_POST['id'];

$pa = $con->query("SELECT password FROM clientes WHERE id = '{$_POST['id']}'");
$row = mysqli_fetch_assoc($pa);
$nueva = $_POST['pass2'];
$very = $_POST['pass3'];

if ($row['password'] == $_POST['pass1']) {
	if ($nueva == $very) {
		$con->query("UPDATE clientes SET password = '$very' WHERE id = '{$_POST['id']}'");

		header("Location: index_user.php?id=$id");
	}else{
		header("Location: pass_cliente.php?id=$id");
	}
}else{
		header("Location: pass_cliente.php?id=$id");
} 


 ?>