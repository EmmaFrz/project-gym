<?php
	require_once("conexion.php");
	$datos=$con->query("SELECT * FROM entrenador WHERE tipo_entrenador = 'personal'");
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
					<img src="adminlte/dist/img/image.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Admin</p>
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
			<form role="form" action="guardar_cliente.php" method="POSt">
					<div class="box-body">
						<div class="form-group">
							<input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
							<label>Nombre</label>
							<input type="text" pattern="[A-Z a-z]+" class="form-control" name="nombre" placeholder="Ingrese nombre" required>
						</div>
						<div class="form-group">
							<label>Cedula</label>
							<input type="number" class="form-control" name="ci" placeholder="Ingrese Cedula" required>
						</div>
						<div class="form-group">
							<label>Direccion</label>
							<input type="text" class="form-control" name="dir" placeholder="Ingrese Direccion" required>
						</div>
						<div class="form-group">
							<label>Email</label>
							<input type="email" class="form-control" name="email" placeholder="Ingrese Correo" required>
						</div>
						<div class="form-group">
							<label>Entrenador personal</label>
							<select class="form-control select2" style="width: 100%;" name="entrenador">
								<?php while ($row = mysqli_fetch_assoc($datos)) {?>
								<option value="<?php echo $row['id'] ?>"><?php echo $row['nombre'] ?> </option>
								<?php } ?>
							</select>
						</div>
						<div class="form-group">
							<label>Plan</label>
							<select class="form-control select2" style="width: 100%;" name="plan">
								<?php while ($assoc = mysqli_fetch_assoc($data)) {?>
								<option value="<?php echo $assoc['id'] ?>"><?php echo $assoc['nombre'] ?> </option>
								<?php } ?>
							</select>
						</div>
						<div class="form-group">
							<label>telefono</label>
							<input type="number" class="form-control" name="tel" placeholder="Ingrese Telefono" required>
						</div>
						<div class="form-group">
							<label>Actividad</label>
							<select class="form-control select2" style="width: 100%;" name="actividad">
								<option value="1">Activo</option>
								<option value="2">Inactivo</option>
							</select>
						</div>
						<div class="form-group">
							<label>Peso (Kg)</label>
							<input type="number" class="form-control" name="peso" placeholder="Ingrese Peso" required>
						</div>
						<div class="form-group">
							<label>Estatura(Cm)</label>
							<input type="number" class="form-control" name="estatura" placeholder="Ingrese Estatura" required>
						</div>
					</div>
					<!-- /.box-body -->

					<div class="box-footer">
						<button type="submit" class="btn btn-primary">Guardar</button>
					</div>
				</form>
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