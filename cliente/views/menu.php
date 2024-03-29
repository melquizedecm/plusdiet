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
				<form action="../controllers/Menu_.php" class="login100-form validate-form" method="post" id="datos">
					<center><h3 style="color:#02b317">Ingresa tu orden</h3></center>
					<br>
					<div class="wrap-input100 validate-input" data-validate = "Campo Requerido">
						<input  class="input100" name="inputNombre" ></input>
						<span class="focus-input100" data-placeholder="Nombre del platillo"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Campo Requerido">
						<span class="focus-input100" data-placeholder="Día de entrega"></span>
						<br>
						<input class="input100" type="date" name="inputFecha" >
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Campo Requerido">
						<input class="input100" type="text" name="inputHora" >
						<span class="focus-input100" data-placeholder="Hora de entrega"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Campo Requerido">
						<textarea rows="4" cols="35" class="input100" type="text" name="inputDescripcion"> </textarea>
						<span class="focus-input100" data-placeholder="Cantidades e ingredientes del platillo"></span>
											</div>					
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" type="Submit" name="datos" id="datos" >Guardar y continuar 
									<!--<a class="login100-form-btn" href="../views/menu2.php">
								Guardar y continuar
							</a>-->
							</button>
						</div>
					</div>
					<div class="container-login100-form-btn">					
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<a class="login100-form-btn" href="../views/index.html">
							Regresar al inicio
							</a>
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