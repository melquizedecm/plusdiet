<?php include('../controllers/Login.php')?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Diet</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="../images/icons/icono.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../css/util.css">
	<link rel="stylesheet" type="text/css" href="../css/main.css">
<!--===============================================================================================-->	
</head>
<body>
<div class="container-login100">
	<div class="wrap-login100">
		<form method="post" action="sesion.php">
		<span class="login100-form-title p-b-48">
			<img src="../images/logo.png">
		</span>
		<div class="wrap-input100 validate-input" data-validate = "Usuario Requerido">
			<input class="input100" type="text" name="username">
			<label class="focus-input100" data-placeholder="Usuario"></label>
		</div>
		<div class="wrap-input100 validate-input" data-validate="Contraseña Requerido">
			<span class="btn-show-pass">
			<i class="zmdi zmdi-eye"></i>
			</span>
			<input class="input100" type="password" name="password">
			<label class="focus-input100" data-placeholder="Contraseña"></label>
		</div>
		<div class="container-login100-form-btn">
			<div class="wrap-login100-form-btn">
				<div class="login100-form-bgbtn"></div>
				<button class="login100-form-btn" type="submit" name="login_btn">
				Iniciar Sesión
				</button>
			</div>
		</div>
		<div class="text-center p-t-115">
			<span class="txt1">
			¿No tienes una cuenta?
			</span>
			<a class="txt2" href="registro.php" style="color:#02b317">
			Regístrate
			</a>
		</div>
		</form>
	</div>
</div>	
</body>
</html>