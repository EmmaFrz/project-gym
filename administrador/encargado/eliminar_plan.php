<?php 

require_once("conexion.php");
$con->query("DELETE FROM `plan` WHERE id = '{$_GET['id']}'");
$id=$_GET['id2'];
header("Location: planes.php?id=$id");


 ?>