<?php 
require_once("conexion.php");

$con->query("UPDATE plan SET nombre='{$_POST['nombre']}',precio='{$_POST['precio']}',turno='{$_POST['turno']}',descripcion='{$_POST['des']}'WHERE id = '{$_POST['id']}'");
$id=$_POST['id2'];
header("Location: planes.php?id=$id");

 ?>