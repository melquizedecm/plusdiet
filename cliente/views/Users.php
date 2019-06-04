<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">	
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
	<script type="text/javascript" href="../js/Users.js"></script>
</head>
<body>
	<section id="formulario">
		<p id="titulo">Registro</p>
		<form action="../controllers/Users.php" method="POST">
			<input type="text" id="nombre" name="userInput" placeholder="Nombre del usuario">
			<input type="password" id="pass" name="passwordInput" placeholder="Contrase&ntilde;a del usuario">
			<input type="submit" value="GUARDAR USUARIO">
		</form>
	</section>
</body>
</html>