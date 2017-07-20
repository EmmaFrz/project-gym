<?php
require_once("administrador/conexion.php");
$id= $_POST['id'];

extract($_POST);

$fecha = date("d-m-Y");

$R = $con->query("INSERT INTO `pagos`(`id_usuario`, `banco`, `tipo_pago`, `referencia`, `fecha_pago`,`confirmacion`) VALUES ('$id','$banco','$pago','$operacion','$fecha','pendiente') ");



echo "Notificacion de pago exitosa";
header("refresh:1; url=index_user.php?id=$id");

 ?>
