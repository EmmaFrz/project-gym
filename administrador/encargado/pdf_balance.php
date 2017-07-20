<?php
	require_once("conexion.php");

	$ti = 0;
	$te = 0;

	$meses = array('mes' => '0', 'enero' => '1', 'febrero' => '2', 'marzo' => '3', 'abril' => '4', 'mayo' => '5', 'junio' => '6', 'julio' => '7', 'agosto' => '8', 'septiembre' => '9', 'octubre' => '10', 'noviembre' => '11', 'diciembre' => '12');
	$dia = isset($_GET['dia']) ? $_GET['dia'] : 0;
	$mes = isset($_GET['mes']) ? $_GET['mes'] : date('m');
	$ano = isset($_GET['ano']) ? $_GET['ano'] : date('Y');

	if ($dia > 0 && $dia <= 31){
		if ($mes < 10) {
			$dddata = $con->query("SELECT * FROM caja WHERE fecha = '$dia-0$mes-$ano'");
			$ddddata = $con->query("SELECT * FROM gastos WHERE fecha = '$dia-0$mes-$ano'");
		}else{
			$dddata = $con->query("SELECT * FROM caja WHERE fecha = '$dia-$mes-$ano'");
			$ddddata = $con->query("SELECT * FROM gastos WHERE fecha = '$dia-$mes-$ano'");
		}
	}else{
		$data=$con->query("SELECT * FROM `caja` WHERE mes = '$mes' AND ano = '$ano'");
		$ddata=$con->query("SELECT * FROM `gastos` WHERE mes = '$mes' AND ano = '$ano'");
	}


?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
		<header>
			<h1>Gimnasio SABAD</h1><br>
			<h2>RIF J-2215132-3</h2>
			<h2>Direccion Avenida Bolivar N19 Local #1</h2><br><br>
		</header>
		<h1>Mes <?php echo $mes . "/" . $ano; ?></h1>
		<h2>ingreso de la caja</h2>
		<table border="2" class="table table-hover dataTable" role="grid" aria-describedby="example2_info">				<thead>

				<tr>
					<td>Fecha</td>
					<td>Motivo</td>
					<td>Monto</td>
				</tr>
			<?php while ($row = mysqli_fetch_array($data)) {  ?>
				<tr>
					<td><?php echo $row['fecha']; ?></td>
					<td><?php echo $row['descripcion']; ?></td>
					<td><?php echo $row['monto']; ?></td>
				</tr>
				<?php $ti += $row['monto']; } ?>
				<tr>
					<td><strong>Total</strong></td>
					<td></td>
					<td>Bs. <?php echo $ti;?></td>
				</tr>
			</table>
			<h2>egresos generales</h2>
			<table border="2" class="table table-hover dataTable" role="grid" aria-describedby="example2_info">				<thead>

					<tr>
						<td>Fecha</td>
						<td>Motivo</td>
						<td>Monto</td>
					</tr>
				<?php while ($row = mysqli_fetch_array($ddata)) {  ?>
					<tr>
						<td><?php echo $row['fecha']; ?></td>
						<td><?php echo $row['descripcion']; ?></td>
						<td><?php echo $row['monto']; ?></td>
					</tr>
					<?php $te += $row['monto']; } ?>
					<tr>
						<td><strong>Total</strong></td>
						<td></td>
						<td>Bs. <?php echo $te; ?></td>
					</tr>
				</table>
				<h2>Balance mensual: Bs. <?php echo $ti - $te; ?> </h2>
				<h2>NOTA: ya los gastos de agua y luz se debitaron</h2>

	</body>
</html>


<?php
	require_once("../../dompdf/autoload.inc.php");
	use Dompdf\Dompdf;

	$dompdf = new Dompdf();
	$dompdf->loadHtml(ob_get_clean());
	$dompdf->setPaper('A4','landscape');
	$dompdf->render();
	$dompdf->stream();







?>
