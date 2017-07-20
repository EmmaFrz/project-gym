<?php
	session_start();
	require_once("administrador/conexion.php");
	$data=$con->query("SELECT * FROM plan");
	$datos = $con->query("SELECT * FROM clientes WHERE id='{$_GET['id']}'");
	$assoc = mysqli_fetch_assoc($datos);

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Administrador</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="administrador/adminlte/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="administrador/adminlte/bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="administrador/adminlte/bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="administrador/adminlte/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="administrador/adminlte/dist/css/skins/skin-blue.min.css">
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">
    <!-- Logo -->
    <a href="#" class="logo">
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
					<img src="administrador/adminlte/dist/img/image.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">

          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Panel de control</li>
        <!-- Optionally, you can add icons to the links -->
        <li>
        <li><a href="editar_cliente.php?id=<?php echo $_GET['id'] ?>"><i class="fa fa-link"></i> <span>Editar datos</span></a></li>
        <li><a href="pagos.php?id=<?php echo $_GET['id'] ?>"><i class="fa fa-link"></i> <span>pagos</span></a></li>
        <li><a href="pass_cliente.php?id=<?php echo $_GET['id'] ?>"><i class="fa fa-link"></i> <span>Cambiar contraseña</span></a></li>
        <li><a href="pdf.php?id=<?php echo $_GET['id'] ?>" class="fa fa-link"></i><span> Descargar recibo</span></a></li>
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
    <h1>Bienvenido <?php echo $assoc['nombre'] ?> </h1>
    <section class="content container-fluid">
			<h3>Lista de planes disponibles</h3>
			<table border="2" class="table table-hover dataTable" role="grid" aria-describedby="example2_info">
				<thead>
					<tr>
						<td>Planes</td>
						<td>Precio</td>
						<td>Caracteristicas</td>
					</tr>
				</thead>
				<tbody>
					<?php while ($row = mysqli_fetch_array($data)) { ?>
					<tr>
						<th><?php echo $row['nombre']; ?></th>
						<th><?php echo $row['precio']; echo "  Bsf" ?></th>
						<th><?php echo $row['descripcion']; ?></th>

					</tr>
					<?php } ?>
				</tbody>
			</table>
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
