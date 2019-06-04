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
				<form class="login100-form validate-form" method="post" id="paquete" action="../controllers/Menu.php">
					<center><h3 style="color:#02b317">Seleciona Tu Paquete</h3></center>
					<br>
					<br>
					<div class="">
						<input type="radio" name="Menu" class="form-input" value="1" id="Menu"> <h7 class="menu">Paquete 1 (5 días x 3 comidas) </h7>
					</div>
					<br>
					<br>
					<div class="">
						<input type="radio" name="Menu" class="form-input" value="2" id="Menu"> <h7 class="menu">Paquete 2 (2 días x 3 comidas) </h7>
					</div>
					<br>
					<br>
					<div class="">
						<input type="radio" name="Menu" class="form-input" value="3" id="Menu"> <h7 class="menu">Paquete 3 (7 días x 1 comidas) </h7>
					</div>					
					<br>
					<br>
					<center><h3 style="color:#02b317">Forma de pago</h3></center>
					<br>
					<br>
					<div class="">
						<input type="radio" name="Metodo" class="form-input" value="1" id="Metodo"> <h7 class="menu">Efectivo </h7>
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