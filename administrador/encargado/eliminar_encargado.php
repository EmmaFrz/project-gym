<?php 

require_once("conexion.php");
$con->query("DELETE FROM `administrador` WHERE id = '{$_GET['id']}'");
$id=$_GET['id2'];
header("Location: encargado.php?id=$id");


 ?>