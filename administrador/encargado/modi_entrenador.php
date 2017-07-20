<?php
require_once("conexion.php");

$con->query("UPDATE entrenador SET nombre='{$_POST['nombre']}', direccion='{$_POST['dir']}',telefono='{$_POST['tel']}', correo='{$_POST['email']}' WHERE id = '{$_POST['id']}'");
$id=$_POST['id2'];
header("Location: entrenador.php?id=$id");

 ?>
