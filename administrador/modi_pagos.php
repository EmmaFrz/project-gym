<?php
require_once("conexion.php");
$fecha = date('d-m-Y');
$con->query("UPDATE pagos SET confirmacion='{$_POST['estado']}',comentarios='{$_POST['comentario']}',updated_at='$fecha' WHERE id = '{$_POST['id']}'");
$id=$_POST['id2'];
header("Location: pagos.php?id=$id");
 ?>
