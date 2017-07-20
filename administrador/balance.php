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
			$dddata = $con->query("SELECT * FROM caja WHERE fecha = '$dia-0$mes-$ano' ORDER BY id desc");
			$ddddata = $con->query("SELECT * FROM gastos WHERE fecha = '$dia-0$mes-$ano'ORDER BY id desc");
		}else{
			$dddata = $con->query("SELECT * FROM caja WHERE fecha = '$dia-$mes-$ano' ORDER BY id desc");
			$ddddata = $con->query("SELECT * FROM gastos WHERE fecha = '$dia-$mes-$ano'");
		}
	}else{
		$data=$con->query("SELECT * FROM `caja` WHERE mes = '$mes' AND ano = '$ano'ORDER BY id desc");
		$ddata=$con->query("SELECT * FROM `gastos` WHERE mes = '$mes' AND ano = '$ano'ORDER BY id desc");
	}


?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Administrador</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="adminlte/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="adminlte/bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="adminlte/bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="adminlte/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="adminlte/dist/css/skins/skin-blue.min.css">
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">
    <!-- Logo -->
    <a href="admin.php?id=<?php echo $_GET['id'] ?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <!-- logo for regular state and mobile devices -->
			<span class="logo-lg"><b>Gimnasio </b> SABAD</span>
    </a>

    <!-- Header Navbar -->
  </header
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
					<img src="adminlte/dist/img/image.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Administrador</p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Panel de control</li>
        <!-- Optionally, you can add icons to the links -->
				<li><a href="entrenador.php?id=<?php echo $_GET['id'] ?>"><i class="fa  fa-bicycle"></i> <span>Entrenadores</span></a></li>
        <li><a href="planes.php?id=<?php echo $_GET['id'] ?>"><i class="fa fa-star-o"></i> <span>Planes</span></a></li>
        <li><a href="clientes.php?id=<?php echo $_GET['id'] ?>"><i class="fa  fa-male"></i> <span>Clientes</span></a></li>
        <li><a href="encargado.php?id=<?php echo $_GET['id'] ?>"><i class="fa  fa-child"></i> <span>Encargados</span></a></li>
        <li><a href="pagos.php?id=<?php echo $_GET['id'] ?>"><i class="fa f fa-money"></i><span>Pagos</span></a></li>
        <li><a href="caja.php?id=<?php echo $_GET['id'] ?>"><i class="fa fa-sign-in"></i> <span>Caja</span></a></li>
				<li><a href="balance.php?id=<?php echo $_GET['id'] ?>"><i class="fa fa-balance-scale"></i> <span>Balance</span></a></li>
				<li><a href="gastos.php?id=<?php echo $_GET['id'] ?>"><i class="fa fa-sign-out"></i> <span>Egresos</span></a></li>
        <br>
        <br>
        <li><a href="index.php"><i class="fa fa-gear"></i> <span>Cerrar Sesion</span></a></li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
          Bienvenido
        <small>Al panel de control administrativo</small>
      </h1>
    </section>
    <!-- Main content -->
    <section class="content container-fluid">
				<form method="GET" action="#">
				<a href="pdf_balance.php?id=<?php echo $row['id'];?>&id2=<?php echo $_GET['id'] ?>"><li class="fa fa-file-pdf-o"></li>Version PDF</th></a>
				<input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
					<div class="box-body">
						<div class="form-group">
							<label>Ingrese Mes</label>
							<select name="mes" class="form-control select2" style="width: 100%;">
							<?php

								foreach ($meses as $key => $value) {
									printf('
										<option value="' . $value . '">'. $key . '</option>
									');
							}

							 ?>
						</select>
						</div>
						<div class="form-group">
							<label>Ingrese Año</label>
							<input type="number" name="ano" value="2017" class="form-control" required>
						</div>

				</form>
				<h1>Mes <?php echo $mes . "/" . $ano; ?></h1>
				<h2>ingreso de la caja</h2>
				<table border="2" class="table table-hover dataTable" role="grid" aria-describedby="example2_info">				<thead>

						<tr>
							<td>Fecha</td>
							<td>Motivo</td>
							<td>Descripcion</td>
							<td>Monto</td>
						</tr>
					<?php while ($row = mysqli_fetch_array($data)) {  ?>
						<tr>
							<td><?php echo $row['fecha']; ?></td>
							<th><?php
									if ($row['motivo']=='efectivo') {
										echo "Pago en efectivo";
									}else{
										if ($row['motivo']=='productos') {
											echo "Pago de productos/insumos";
										}
									}
								?>
						</th>
							<td><?php echo $row['descripcion']; ?></td>
							<td><?php echo $row['monto']; ?></td>
						</tr>
						<?php $ti += $row['monto']; } ?>
						<tr>
							<td><strong>Total</strong></td>
							<td></td>
							<td></td>
							<td>Bs. <?php echo $ti;?></td>
						</tr>
					</table>
					<h2>egresos generales</h2>
					<table border="2" class="table table-hover dataTable" role="grid" aria-describedby="example2_info">				<thead>

							<tr>
								<td>Fecha</td>
								<td>Motivo</td>
								<td>Descripcion</td>
								<td>Monto</td>
							</tr>
						<?php while ($row = mysqli_fetch_array($ddata)) {  ?>
							<tr>
								<td><?php echo $row['fecha']; ?></td>
								<th>
									<?php
										if ($row['motivo']=='servicio_pago') {
												echo "Servicio Sanitarios";
										}else{
											if ($row['motivo']=='pago_empleado') {
												echo "Pago de empleados";
											}else {
												if ($row['motivo']=='equipos') {
													echo "Pago de equipos deportivos";
												}
											}
										}
									?>
								</th>
								<td><?php echo $row['descripcion']; ?></td>
								<td><?php echo $row['monto']; ?></td>
							</tr>
							<?php $te += $row['monto']; } ?>
							<tr>
								<td><strong>Total</strong></td>
								<td></td>
								<td></td>
								<td>Bs. <?php echo $te; ?></td>
							</tr>
						</table>
						<h2>Balance: Bs. <?php echo $ti - $te; ?></h2>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Derechos reservados.
  </footer>

  <!-- Control Sidebar -->
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->

<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
</body>
</html>
