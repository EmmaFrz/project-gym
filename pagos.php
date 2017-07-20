<?php
	require_once("administrador/conexion.php");
	$ddata=$con->query("SELECT * FROM pagos WHERE id_usuario =  '{$_GET['id']}' ORDER BY id desc ");
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
    <a href="index_user.php?id=<?php echo $_GET['id'] ?>" class="logo">
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
<img src="administrador/adminlte/dist/img/image.png" class="img-circle" alt="User Image">        </div>
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
    <section class="content container-fluid">
			<form action="notificar_pago.php" method="post">
			<input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
			<div class="box-body">
				<div class="form-group">
					<label >Seleccione su banco</label>
				<select name="banco" required class="form-control select2" style="width: 100%;">
						<option value="100% BANCO">100% BANCO</option>
						<option value="ABN AMRO BANK">ABN AMRO BANK</option>
						<option value="BANCAMIGA BANCO MICROFINANCIERO, C.A">BANCAMIGA BANCO MICROFINANCIERO, C.A</option>
						<option value="BANCO ACTIVO BANCO COMERCIAL, C.A">BANCO ACTIVO BANCO COMERCIAL, C.A</option>
						<option value="BANCO AGRICOLA">BANCO AGRICOLA</option>
						<option value="BANCO BICENTENARIO ">BANCO BICENTENARIO </option>
						<option value="BANCO CARONI, C.A BANCO UNIVERSAL">BANCO CARONI, C.A BANCO UNIVERSAL</option>
						<option value="BANCO DE DESARROLLO DEL MICROEMPRESARIO">BANCO DE DESARROLLO DEL MICROEMPRESARIO</option>
						<option value="BANCO DE VENEZUELA S.A.I.C.A">BANCO DE VENEZUELA S.A.I.C.A</option>
						<option value="BANCO DEL CARIBE C.A">BANCO DEL CARIBE C.A</option>
						<option value="BANCO DEL PUEBLO SOBERANO, C.A">BANCO DEL PUEBLO SOBERANO, C.A</option>
						<option value="BANCO DEL TESORO">BANCO DEL TESORO</option>
						<option value="BANCO DEL ESPIRITU SANTO, C.A ">BANCO DEL ESPIRITU SANTO, C.A </option>
						<option value="BANCO EXTERIOR C.A">BANCO EXTERIOR C.A</option>
						<option value="BANCO INDUSTRIAL DE VENEZUELA.">BANCO INDUSTRIAL DE VENEZUELA.</option>
						<option value="BANCO INTERNACIONAL DE DESARROLLO.">BANCO INTERNACIONAL DE DESARROLLO.</option>
						<option value="BANCO MERCANTIL C.A">BANCO MERCANTIL C.A</option>
						<option value="BANCO NACIONAL DE CREDITO">BANCO NACIONAL DE CREDITO</option>
						<option value="BANCO OCCIDENTAL DE DESCUENTO.">BANCO OCCIDENTAL DE DESCUENTO.</option>
						<option value="BANCO PLAZA">BANCO PLAZA</option>
						<option value="BANCO PROVINCIAL BBVA">BANCO PROVINCIAL BBVA</option>
						<option value="BANCO VENEZOLANO DE CREDITO S.A">BANCO VENEZOLANO DE CREDITO S.A</option>
						<option value="BANCO VENEZOLANO DE CREDITO S.A">BANCO VENEZOLANO DE CREDITO S.A</option>
						<option value="BANESCO">BANESCO</option>
						<option value="BANFANB">BANFANB</option>
						<option value="BANGENTE">BANGENTE</option>
						<option value="BANPLUS BANCO COMERCIAL C.A">BANPLUS BANCO COMERCIAL C.A</option>
						<option value="CITIBANK.">CITIBANK.</option>
						<option value="CORP BANCA.">CORP BANCA.</option>
						<option value="DELSUR BANCO UNIVERSAL">DELSUR BANCO UNIVERSAL</option>
						<option value="FONDO COMUN">FONDO COMUN</option>
						<option value="INSTITUTO MUNICIPAL DE CREDITO POPULAR  ">INSTITUTO MUNICIPAL DE CREDITO POPULAR  </option>
						<option value="MIBANCO BANCO DE DESARROLLO, C.A">MIBANCO BANCO DE DESARROLLO, C.A</option>
						<option value="SOFITASA">SOFITASA</option>
				 </select >
				 </div>
				<div class="form-group">
				<label>Ingrese El formato de pago</label>
				<select name="pago" required class="form-control select2" style="width: 100%;">
						<option value="deposito">Deposito</option>
						<option value="transferencia">Transferencia</option>
				</select>
				</div>
				<div class="form-group">
				<label >Ingrese numero de operacion bancaria</label>
				<input type="number" name="operacion" required>
				</div>
				<input type="submit" name="enviar" value="Notificar Pago">
			</form>
			<br>
			Aqui se lista tu historial de notificaciones de pagos
			<br>
			<table border="2" class="table table-hover dataTable" role="grid" aria-describedby="example2_info">
			<thead>
				<tr>
					<td>id</td>
					<td>Banco</td>
					<td>Metodo de pago</td>
					<td>Numero de refrenecia</td>
					<td>Fecha de pago</td>
					<td>Fecha de recepcion</td>
					<td>Status</td>
					<td>Comentario</td>
				</tr>
			</thead>
			<tbody>
				<?php while ($row = mysqli_fetch_array($ddata)) { ?>
				<tr>
					<th><?php echo $row['id']; ?></th>
					<th><?php echo $row['banco'];?></th>
					<th><?php echo $row['tipo_pago'];?></th>
					<th><?php echo $row['referencia'];?></th>
					<th><?php echo $row['fecha_pago']; ?></th>
					<th><?php echo $row['updated_at']; ?></th>
					<th><?php echo $row['confirmacion']; ?></th>
					<th><?php echo $row['comentarios']; ?></th>
				</tr>
				<?php } ?>
				</table>
	</body>
  </div>
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
