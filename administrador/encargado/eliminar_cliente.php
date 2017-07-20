<?php 

require_once("conexion.php");
$con->query("DELETE FROM `clientes` WHERE id = '{$_GET['id']}'");
$id = $_GET['id2'];
header("Location: clientes.php?id=$id");


 ?>

