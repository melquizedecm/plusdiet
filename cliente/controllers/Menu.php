<?php
require_once '../models/Menu.php';
///1. recibir variables///
if (isset($_POST['Menu'])) {
	$menu=$_POST['Menu'];
	$metodo=$_POST['Metodo'];

///#. enviar los datos al modelo///
//Codigo del controlador para crear//
	$Users= new Users();
	$Users->menu=$menu;
	$Users->metodo=$metodo;	
	$Users->create();	
///Codigo para borrar///
print "<script>window.location='../views/inicio.php';</script>";	
}