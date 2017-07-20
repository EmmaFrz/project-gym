<?php

require_once("conexion.php");
$con->query("DELETE FROM `entrenador` WHERE id = '{$_GET['id']}'");
$id=$_GET['id2'];
header("Location: entrenador.php?id=$id");


 ?>
