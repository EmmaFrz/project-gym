<?php
require_once("conexion.php");

extract($_POST);

$fecha = date("d-m-Y");
$mes = date('m');
$ano = date('Y');

$R = $con->query("INSERT INTO 
	`gastos` (`descripcion`, `monto`, `fecha`, `mes`, `ano`) VALUES ('$descripcion', '$monto', '$fecha', '$mes', '$ano')");


header("Location: gastos.php?id=$id");

 ?>
