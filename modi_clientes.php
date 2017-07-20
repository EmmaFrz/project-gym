<?php
require_once("administrador/conexion.php");

$fecha = date("d-m-Y");
$id = $_POST['id'];


$con->query("UPDATE clientes SET correo='{$_POST['email']}', direccion='{$_POST['direccion']}', id_entrenador='{$_POST['entrenador']}',id_plan='{$_POST['plan']}', telefono='{$_POST['tel']}',modificaciones='$fecha' WHERE id = '{$_POST['id']}'");

header("Location: index_user.php?id=$id");

 ?>
