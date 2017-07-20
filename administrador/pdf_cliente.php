<?php
require_once("conexion.php");
$datos = $con->query("SELECT * FROM clientes WHERE id='{$_GET['id']}'");
$assoc = mysqli_fetch_assoc($datos);
$id = intval($assoc['id_plan']);
$id_entrenador = intval($assoc['id_entrenador']);


$datoe = $con->query("SELECT * FROM entrenador WHERE id = '$id_entrenador'");
$rrow = mysqli_fetch_assoc($datoe);
echo $rrow ['nombre'];

$date=date('d-m-Y');
$data=$con->query("SELECT * FROM plan WHERE id = '$id'");
$row=mysqli_fetch_assoc($data);
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
		<style type="text/css">
				header{
						background: #88C542;
						border-radius: 35px;
				}

				.cuerpo{
						background: #99c556;
						border-radius: 20px;
						margin-left: 20%;

				}
		</style>
	</head>
	<body>
		<header>
			<h1>Gimnasio SABAD</h1><br>
			<h2>RIF J-2215132-3</h2>
			<h2>Direccion Avenida Bolivar N19 Local #1</h2><br><br>
		</header>
		<h3>Bienvenido a laf ficha tecnica de <?php echo $assoc['nombre'] ?></h3><br>
		<p>Su cedula es la <?php  echo $assoc['ci']?></p> <br>
		<p>Su peso actual es <?php echo $assoc['peso'] ?> Kilogramos</p><br>
		<p>Su estatura actual es <?php echo $assoc['estatura'] ?> Centimetro</p><br>
		<p>Su entrenador actual es <?php echo $rrow['nombre'] ?> </p><br>
		<p>El plan que cursa actualmente es <?php echo $row['nombre'] ?> </p><br>
		<footer><?php echo $date ?></footer>
	</body>
</html>



<?php
	require_once("../dompdf/autoload.inc.php");
	use Dompdf\Dompdf;


	$dompdf = new Dompdf();
	$dompdf->loadHtml(ob_get_clean());
	$dompdf->setPaper('A4','landscape');
	$dompdf->render();
	$dompdf->stream();







?>
