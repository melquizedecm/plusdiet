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
	<link rel="stylesheet" type="text/css" href="../vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../css/util.css">
	<link rel="stylesheet" type="text/css" href="../css/main.css">
<!--===============================================================================================-->
</head>
<body>
		<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="post" id="registro" action="../controllers/Registro.php">
					<center><h3 style="color:#02b317">Crea tu cuenta ya</h3></center>
					<div class="wrap-input100 validate-input" data-validate = "Usuario Requerido">
						<input class="input100" type="text" name="Username" >
						<span class="focus-input100" data-placeholder="Nombre de Usuario"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Nombre Requerido">
						<input class="input100" type="text" name="Nombre" >
						<span class="focus-input100" data-placeholder="Nombre Completo"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Email Requerido">
						<input class="input100" type="text" name="Email" >
						<span class="focus-input100" data-placeholder="Email"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Contraseña Requerido">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="Password" >
						<span class="focus-input100" data-placeholder="Contraseña"></span>
					</div>
					<br>
					<center><h3 style="color:#02b317">Ingresar Datos</h3></center>
					<div class="wrap-input100 validate-input" data-validate = "Edad Requerido">
						<input class="input100" type="number" name="Edad" >
						<span class="focus-input100" data-placeholder="Edad"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Peso Requerido">
						<input class="input100" type="number" name="Peso" >
						<span class="focus-input100" data-placeholder="Peso"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Estatura Requerido">
						<input class="input100" type="number" step="0.01" name="Estatura" >
						<span class="focus-input100" data-placeholder="Estatura"></span>
					</div>
					<br>
					<center><h3 style="color:#02b317">Actividad Fisica</h3></center>
					<br>
					<br>
					<br>
					<div class="">
						<input type="radio" name="Fisica" class="form-input" value="1.0" id="Fisica"> Bajo(estar sentado en la oficina, caminar al baño de la oficina)
					</div>
					<br>
					<br>
					<div class="">
						<input type="radio" name="Fisica" class="form-input" value="1.5" id="Fisica"> Medio(tratas de hacer un poco mas de caminata)
					</div>
					<br>
					<br>
					<div class="">
						<input type="radio" name="Fisica" class="form-input" value="2.0" id="Fisica"> Alto(tienes un regimen estricto de alimentación y de ejercicio)
					</div>					
					<br>
					<br>
					<center><h3 style="color:#02b317">Sexo</h3></center>
					<br>
					<br>
					<br>
					<div class="">
						<input type="radio" name="Sex" class="form-input" value="0" id="Sex"> Masculino
					</div>
					<div class="">
						<input type="radio" name="Sex" class="form-input" value="1" id="Sex"> Femenino
					</div>

					<br>
					<br>
					<div class="">
					</div>
					<br>
					<br>
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" type="Submit" name="registro" id="registrarse" >
								Regístrate
							</button>
						</div>
					</div>

					<div class="text-center p-t-115">
						<span class="txt1">
							¿tienes una cuenta?
						</span>

						<a class="txt2" href="sesion.php" style="color:#02b317">
							Iniciar Sesión
						</a>
					</div>
				</form>
			</div>
		</div>
	</div> 
	<div id="dropDownSelect1"></div>
<!--===============================================================================================-->
	<script src="../vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="../vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="../vendor/bootstrap/js/popper.js"></script>
	<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="../vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="../vendor/daterangepicker/moment.min.js"></script>
	<script src="../vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="../vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="../js/main.js"></script>

</body>
</html>	