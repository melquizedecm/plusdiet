<?php 

//1. recibir datos

$nombre=$_POST['inputNombre'];
$descripcion=$_POST['inputNombre'];
$nombre=$_POST['inputNombre'];
$nombre=$_POST['inputNombre'];

//2. conectarme
	$db = mysqli_connect('localhost','root','','diet');
//3. guardar los datos
	$sql="UPDATE solicitud SET nombre='".$nombre."', descripcion='".$descripcion."' WHERE id='29'";
	mysqli_query($db, $sql);
//4. regresar un mensaje 


