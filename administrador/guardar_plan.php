<?php 
require_once("conexion.php");

$con->query("INSERT INTO `plan`(`nombre`, `precio`, `turno`, `descripcion`) VALUES ('{$_POST['nombre']}','{$_POST['precio']}','{$_POST['turno']}','{$_POST['des']}')");
$id=$_POST['id'];

header("Location: planes.php?id=$id");

