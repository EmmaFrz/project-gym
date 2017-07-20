<?php
require_once("conexion.php");

$con->query("UPDATE administrador SET nombre='{$_POST['nombre']}',correo='{$_POST['correo']}',telefono='{$_POST['tel']}',id_permiso='{$_POST['permiso']}',password='{$_POST['pass']}' WHERE id = '{$_POST['id']}'");
$id=$_POST['id2'];
header("Location: encargado.php?id=$id");

 ?>
