<?php
require_once("conexion.php");
$id= $_POST['id'];

extract($_POST);

$fecha = date("d-m-Y");

$R = $con->query("INSERT INTO `clientes`(`nombre`, `ci`, `correo`, `direccion`, `id_entrenador`, `id_plan`, `telefono`,`peso`,`estatura`, `password`, `actividad`, `registro`,`modificaciones`) VALUES ('$nombre','$ci','$email','$dir','$entrenador','$plan','$tel','$peso','$estatura','$ci','$actividad','$fecha','$fecha') ");


header("Location: clientes.php?id=$id");



 ?>
