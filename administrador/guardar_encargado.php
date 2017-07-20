<?php
require_once("conexion.php");

$con->query("INSERT INTO `administrador`(`nombre`, `correo`, `telefono`, `ci`, `password`, `id_permiso`) VALUES ('{$_POST['nombre']}','{$_POST['correo']}','{$_POST['tel']}','{$_POST['ci']}','{$_POST['pass']}','{$_POST['permiso']}')");
$id=$_POST['id'];

header("Location: encargado.php?id=$id");



 ?>
