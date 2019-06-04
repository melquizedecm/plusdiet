<?php
require '../core/Config.php';
class Users extends Config{
	private $id;
	public  $menu;
	public 	$metodo;
	public 	$link;

	function __construct(){
		$this->link= parent::__construct();
	}
	//crud//
	function create(){
		$sql="INSERT INTO pago(menu,metodo) 
		VALUES ('".$this->menu."','".$this->metodo."')";
		return $this->link->query($sql);

	}
}