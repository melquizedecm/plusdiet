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
					<center><h3 style="color:#6B9D3D">Consumo De Calorias</h3></center>
					<br>
					<br>
					<center><div>
						<img src="../images/bascula.gif">
						<br>
						<div class="wrap-input100 validate-input" data-validate = "Peso Requerido">
							<input class="input100" type="number" id="peso" value="">
							<label class="focus-input100" data-placeholder="Peso (Kg)"></label>
						</div>
						<div class="wrap-input100 validate-input" data-validate = "Talla Requerido">
							<input class="input100" type="number" id="talla" value="">
							<label class="focus-input100" data-placeholder="Altura (m):"></label>
						</div>
						<h4 class="menu_c">Total de calorias</h4>
						<br>						
						 <p id="demo"></p>
						 <p id="imc"></p>
						 <script>
						 var v = 0;
						 function imc()
						 {
						 var z=parseFloat(document.getElementById("talla").value);
						 var y=parseFloat(document.getElementById("talla").value);
						 var t=parseFloat(document.getElementById("peso").value);
						 var x=parseFloat(z*y).toFixed(2);
						 v=parseFloat(t/x).toFixed(1);
						 document.getElementById("demo").innerHTML="<p>IMC: " + v + "</p>";
						 }
						 </script>
						 <script>
						 function recomendacion()
						 {
						 var b="";
						 var c=v;
						 if (c > 40.0)
						  {
						  b="3000";
						  }
						 if (c < 20.0)
						  {
						  b="2,800"; 
						  }
						 if (c > 20.0 &&  c< 25.0)
						  {
						  b="2600";
						  }
						 if (c > 25.0 && c < 30.0)
						  {
						  b="2400"; 
						  }
						 if(c > 30.0 && c < 40.0)
						  {
						  b="3500";
						  }

						 document.getElementById("imc").innerHTML="<p>calorias: " + b + "</p>"; 
						 }
						 </script>
						 <br>
						 <br>
				<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" onClick="imc();recomendacion();">
								Calcular
							</button>
						</div>
					</div>
				<div class="container-login100-form-btn">					
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<a class="txt2" href="../views/index.html">
							<button class="login100-form-btn" type="Submit" name="datos" id="datos" >
								Regresar al inicio
							</button>
							</a>
						</div>
					</div>	
					<div class="text-center p-t-115">
						<br>
						<br>
					</div>
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