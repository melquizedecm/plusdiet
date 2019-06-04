<?php
require_once '../models/Registro.php';
///1. recibir variables///
if (isset($_POST['Username'])) {
	$username=$_POST['Username'];
	$nombre=$_POST['Nombre'];
	$email=$_POST['Email'];
	$password=$_POST['Password'];
	$edad=$_POST['Edad'];
	$peso=$_POST['Peso'];
	$estatura=$_POST['Estatura'];
	$fisica=$_POST['Fisica'];
	$sexo=$_POST['Sex'];			
	$status='1';
///2. configurar variables///
	$password=md5($password);
	$status='1';
///#. enviar los datos al modelo///
//Codigo del controlador para crear//
	$Users= new Users();
	$Users->username=$username;
	$Users->nombre=$nombre;	
	$Users->email=$email;	
	$Users->password=$password;
	$Users->edad=$edad;
	$Users->peso=$peso;	
	$Users->estatura=$estatura;
	$Users->fisica=$fisica;
	$Users->sexo=$sexo;							
	$Users->status=$status;
	$Users->create();
///Codigo para borrar///
// $id="2";
// $users->delete($id);
// echo json_encode($users->read());
print "<script>window.location='../views/sesion.php';</script>";	
}