<!DOCTYPE html>
<html lang="en">
<head>
	<title>Diet</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/icono.ico"/>
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
				<form class="login100-form validate-form" method="post" id="datos">
					<center><h3 style="color:#02b317">Ingresa Tu Menu</h3></center>
					<br>
					<br>
					<div class="wrap-input100 validate-input" data-validate = "Campo Requerido">
						<input class="input100" type="number" name="Porción de origen animal" >
						<span class="focus-input100" data-placeholder="Porción de origen animal"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Campo Requerido">
						<input class="input100" type="number" name="Porción de verduras" >
						<span class="focus-input100" data-placeholder="Porción de verduras"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Campo Requerido">
						<input class="input100" type="number" step="0.01" name="Porción de frutas" >
						<span class="focus-input100" data-placeholder="Porción de frutas"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Campo Requerido">
						<input class="input100" type="number" name="Porción de leguminosas" >
						<span class="focus-input100" data-placeholder="Peso"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Campo Requerido">
						<input class="input100" type="number" step="0.01" name="Porción de cereales" >
						<span class="focus-input100" data-placeholder="Porción de cereales"></span>
					</div>					
					<br>
					<br>
					<br>
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" type="Submit" name="datos" id="datos" >
								Guardar
							</button>
						</div>
					</div>
					<div class="text-center p-t-115">
						<br>
						<br>
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