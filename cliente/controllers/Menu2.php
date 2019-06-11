<?php 

//1. recibir datos

$Latitud=$_POST['inputLatitud'];
$Longitud=$_POST['inputLongitud'];
$Referencia=$_POST['inputReferencia'];


//2. conectarme
	$db = mysqli_connect('localhost','labora53_diet','plusdiet135790','labora53_diet');

//seleccion el  id que voy a editar...
$selectId= "SELECT MAX(id) as id FROM solicitud";
$result= mysqli_query($db, $selectId);
$fila = mysqli_fetch_assoc($result);
$id= $fila['id'];

//3. guardar los datos
	$sql="UPDATE solicitud SET latitud='".$Latitud."', longitud='".$Longitud."', referencia='".$Referencia."' WHERE id='".$id."'";
	mysqli_query($db, $sql);
//4. regresar un mensaje 
header("Location: ../views/index.html");