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
					<center><h4 style="color:#02b317">Referencias de la ubicación</h4></center>
                <br>
					<div id="map" style="width: 300px; height:280px;"></div>
					<br>
					<br><div id="mensaje" class="text-center"></div>
                <div id="map" class="text-center"></div>



                <script type="text/javascript"
                        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDREk_YdULofxlx4E8Ka98yR5Ut7GgJFrU&callback=initMap"></script>

                <script type="text/javascript">
                    var x, y;

                    function getLocation() {
                        if (navigator.geolocation) {
                            var div = document.getElementById('mensaje');
                            div.innerHTML = " ";
                            navigator.geolocation.getCurrentPosition(mapas);
                        }
                        else {
                            {
                                var div = document.getElementById('mensaje');
                                div.innerHTML = "Error";
                            }
                        }
                    }

                    function showPosition(position) {
                        x = position.coords.latitude;
                        y = position.coords.longitude
                    }


                    function mapas(position) {
                        var div = document.getElementById('mensaje');
                        //div.innerHTML=position.coords.latitude + '   ' + position.coords.longitude;
                        var latlng = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
                        var map = new google.maps.Map(document.getElementById('map'), {
                            center: latlng,
                            zoom: 15,
                            mapTypeId: google.maps.MapTypeId.ROADMAP,
                        });
                        var marker = new google.maps.Marker({
                            position: latlng,
                            map: map,
                            title: 'Set lat/lon values for this property',
                            draggable: true
                        });
                        google.maps.event.addListener(marker, 'dragend', function (a) {
                            console.log(a);
                            document.getElementById('inputLatitud').value = a.latLng.lat().toFixed(4);
                            document.getElementById('inputLongitud').value = a.latLng.lng().toFixed(4);
                        });
                    }

                    window.onload = getLocation();
                </script>
                <br>


					<form action="../controllers/Menu2.php" class="login100-form validate-form" method="post" id="datos">
					<div class="wrap-input100 validate-input" data-validate = "Campo Requerido">
						<input  name="inputLatitud" type="hidden" id="inputLatitud">
						<input  name="inputLongitud" type="hidden" id="inputLongitud">

						<input  class="input100" name="inputReferencia" >
						<span class="focus-input100" data-placeholder="Referencias"></span>
					</div>				
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" type="Submit" name="datos" id="datos" >Guardar y finalizar 
								<!--	<a class="login100-form-btn" href="../views/index.html">
								Guardar y finalizar
							</a>-->
							</button>
						</div>
					</div>

				</form>
				
				
    
			</div>
		</div>
	</div>
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