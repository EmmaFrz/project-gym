<?php
	require_once("conexion.php");
	$data=$con->query("SELECT * FROM plan");
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
			<body>
				<a href="nuevo_plan.php?id=<?php echo $_GET['id'] ?>">Agregar Nuevo</a>
				<table border="2" class="table table-hover dataTable" role="grid" aria-describedby="example2_info">
					<thead>
						<tr>
							<td>Nombre</td>
							<td>precio</td>
							<td>turno</td>
							<td>Descripcion</td>
							<td>Accion</td>

						</tr>
					</thead>
					<tbody>
						<?php while ($row = mysqli_fetch_array($data)) { ?>
						<tr>
							<th><?php echo $row['nombre']; ?></th>
							<th><?php echo $row['precio']; echo "  Bsf" ?></th>
							<th><?php
										if ($row['turno'] == 1) {
											echo "Mañana";
										}else{
											if ($row['turno'] == "2") {
												echo "Tarde";
											}else {
												if ($row['turno'] == "3") {
													echo "Noche";
												}else {
													if ($row['turno'] =="4") {
														echo "Todos los turnos";
													}
												}
											}
										}
							?>
							</th>
							<th><?php echo $row['descripcion']; ?></th>
							<th><a href="eliminar_plan.php?id=<?php echo $row['id'];?>&id2=<?php echo $_GET['id'] ?>"><li class="fa fa-close"></li>Eliminar</a><br><a href="modificar_plan.php?id=<?php echo $row['id'];?>&id2=<?php echo $_GET['id'] ?>"><li class="fa fa-edit"></li>Editar</a></th>
						</tr>
						<?php } ?>
					</tbody>
				</table>
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
