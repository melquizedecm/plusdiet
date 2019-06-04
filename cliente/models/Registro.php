<?php
require '../core/Config.php';
class Users extends Config{
	private $id;
	public 	$username;
	public 	$nombre;
	public 	$email;
	public 	$password;
	public 	$edad;
	public 	$peso;
	public 	$estatura;
	public 	$fisica;
	public 	$sexo;	
	public 	$created_at;
	public 	$updated_at;
	public 	$status;
	public 	$link;

	function __construct(){
		$this->link= parent::__construct();
	}
	//crud//
	function create(){
		$sql="INSERT INTO usuarios(username,nombre,email,password,edad,peso,estatura,promedio_actividad,sexo,status) 
		VALUES ('".$this->username."','".$this->nombre."','".$this->email."','".$this->password."','".$this->edad."','".$this->peso."','".$this->estatura."','".$this->fisica."','".$this->sexo."','".$this->status."')";
		return $this->link->query($sql);

	}
	function read(){
		$sql="SELECT * FROM usuarios";
		$tabla= $this->link->query($sql);
		///elabora un arreglo que permita visualisar los datos///
		$arreglo=array();
		$i=0;
		while ($fila = $tabla->fetch_array(MYSQLI_ASSOC)) {
			$arreglo[$i]=$fila;
			$i++;
		}return $arreglo;

	}
	function update(){
		$sql="UPDATE usuarios('".$this->username."','".$this->nombre."','".$this->email."','".$this->password."','".$this->edad."','".$this->peso."','".$this->estatura."','".$this->sexo."','".$this->fisica."','".$this->status."')";
		return $this->link->query($sql);
	}
	function delete($id){
		$sql= "UPDATE usuarios SET status= '0' WHERE id='".$id."' ";
		return $this->link->query($sql);
	}
}
?>