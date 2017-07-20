<?php
require_once("conexion.php");

$id = $_POST['id'];

extract($_POST);

$fecha = date("d-m-Y");
$mes = date('m');
$ano = date('Y');

$R = $con->query("INSERT INTO `caja` (`nombre`, `monto`,`motivo`, `descripcion`, `fecha`, `mes`, `ano`, `id_caja`) VALUES ('$nombre', '$monto','$motivo','$descripcion', '$fecha', '$mes', '$ano', '$id_caja')");


header("Location: caja.php?id=$id");

 ?>
