<?php 

//1. recibir datos

$nombre=$_POST['inputNombre'];
$descripcion=$_POST['inputDescripcion'];
$Fecha=$_POST['inputFecha'];
$Hora=$_POST['inputHora'];

//2. conectarme
	$db = mysqli_connect('localhost','root','','diet');

//seleccion el  id que voy a editar...
$selectId= "SELECT MAX(id) as id FROM solicitud";
$result= mysqli_query($db, $selectId);
$fila = mysqli_fetch_assoc($result);
$id= $fila['id'];

//3. guardar los datos
	$sql="UPDATE solicitud SET nombre='".$nombre."', descripcion='".$descripcion."',fecha_entrega='".$Fecha."',horario='".$Hora."' WHERE id='".$id."'";
	mysqli_query($db, $sql);
//4. regresar un mensaje 
header("Location: ../views/menu2.php");

