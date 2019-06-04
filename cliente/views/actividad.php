<?php
session_start();  
 include("../modelos/conexion.php");
        if(isset($_POST['actividad']))
        {
            if($_POST['Fisica'] == '')
    {
        // echo "Debe llenar todos los campos por favor.";
    }else{
             $sql = 'SELECT * FROM usuarios';
             $rec = mysqli_query($conexion,$sql);

             $fisica = $_POST['Fisica'];
             $conexion->query("UPDATE usuarios (promedio_actividad) where (id = '$id') VALUES ('$fisica')");
                         mysqli_query($conexion,$sql);
                         header("location: sesion.php");
        }
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
</head>
<body>
		<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="post" id="actividad">
					<center><h3 style="color:#02b317">Actvidad Fisica</h3></center>
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
					<br>
					<br>
					<br>
					<br>
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" type="Submit" name="actividad" id="actividad" >
								Siguiente
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