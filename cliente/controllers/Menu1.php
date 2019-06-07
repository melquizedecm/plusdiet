<?php 

//1. recibir datos

if (isset($_POST['inputDesayuno'])){
	//2. conectarme
	$db = mysqli_connect('localhost','root','','diet');
//3. guardar los datos
	$sql="INSERT INTO solicitud (tipo) VALUES ('1')";
	mysqli_query($db, $sql);
}

if (isset($_POST['inputAlmuerzo'])){
	//2. conectarme
	$db = mysqli_connect('localhost','root','','diet');
//3. guardar los datos
	$sql="INSERT INTO solicitud (tipo) VALUES ('2')";
	mysqli_query($db, $sql);
}

if (isset($_POST['inputCena'])){
	//2. conectarme
	$db = mysqli_connect('localhost','root','','diet');
//3. guardar los datos
	$sql="INSERT INTO solicitud (tipo) VALUES ('3')";
	mysqli_query($db, $sql);
}





//4. enviar respuesta
header("Location: ../views/menu.php");

?>