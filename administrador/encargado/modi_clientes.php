<?php
require_once("conexion.php");

$fecha = date("d-m-Y");

$con->query("UPDATE clientes SET nombre='{$_POST['nombre']}', ci='{$_POST['ci']}', correo='{$_POST['email']}', direccion='{$_POST['direccion']}', id_entrenador='{$_POST['entrenador']}',id_plan='{$_POST['plan']}', telefono='{$_POST['tel']}', peso='{$_POST['peso']}', estatura='{$_POST['estatura']}',modificaciones='$fecha' WHERE id = '{$_POST['id']}'");
$id=$_POST['id2'];
header("Location: clientes.php?id=$id");

 ?>
