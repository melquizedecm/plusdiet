<?php 
	include('../controllers/Login.php');

	if (!isLoggedIn()) {
		$_SESSION['msg'] = "You";
		header('location: ../views/sesion.php');
	}
?>
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
	<link rel="stylesheet" href="../css/menu.css">

<!--===============================================================================================-->
</head>
<body>
	<div class="">
		<div class="container-login100">
			<div class="wrap-login110">
				<div class="container-login100-form-btn">
				<header class="wrap-login110">
					<div class="navegacion">
						<nav>
							<ul class="menu">
								<br>
								<a href="inicio.php"><i class="fa fa-bars fa-lg" style="" width="16" height="16"></i></a>
							</ul>
							<center><h4 class="text">Inicio</h4></center>
							<br>
						</nav>
					</div>
				</header>
				</div>
				<dir class="body">
				<br>
				<br>
				<br>
				<div class="container-login100-form-btn">
				<a class="txt2" href="salir.php" class="menu_c" style="font-size:140%; color:#02b317">
				Salir
				</a>					
				<br>
				<br>
				<br>					
				</div>	
				<br>
				<br>
				<br>
				<div class="container-login100-form-btn">
				<br>
				<br>
				<br>					
				</div>	
				<br>
				<br>
				<br>
				<div class="container-login100-form-btn">
				<br>
				<br>
				<br>					
				</div>	
				<br>
				<br>
				<br>
				<br>
				<br>							
				</dir>
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