<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Administrador</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Montserrat:400,700'>
<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
<link rel="stylesheet" href="../template/css/style.css">


</head>

<body>
<div class="container">
  <div class="info">
    <h1>Iniciar Sesion</h1>
    <h2>Administrativo</h2>
  </div>
</div>
<div class="form">
  <div class="thumbnail"><img src="admin.png"/></div>
  <form class="login-form" action="sesion_admin.php" method="POST">
    <input type="text" placeholder="correo" id="usuario" name="correo" required/>
    <input type="password" placeholder="contraseña" id="pass" name="pass" required/>
    <button type="submit">login</button>
  </form>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src="template/js/index.js"></script>
</body>
</html>
