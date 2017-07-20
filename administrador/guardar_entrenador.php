<?php
require_once("conexion.php");


$con->query("INSERT INTO `entrenador`(`nombre`, `direccion`, `tipo_entrenador`,
  `telefono`, `ci`, `correo`,`id_plan`)
  VALUES ('{$_POST['nombre']}','{$_POST['dir']}','{$_POST['tipo_entrenador']}',
    '{$_POST['tel']}','{$_POST['ci']}','{$_POST['email']}','{$_POST['plan']}')");

$id = $_POST['id'];

header("Location: entrenador.php?id=$id");



 ?>
