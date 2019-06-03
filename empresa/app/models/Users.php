<?php
require_once '../core/config.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Users
 *
 * @author melqui
 */
class Users extends Config {
    
    public $id;
    public $username;
    public $password;
    public $full_name;
    public $created_at;
    public $updated_at;
    public $status;
    private $db;
    
    function __construct() {
        $this->db= parent::conectar();
    }
    
    function create(){
        $sql="INSERT into users (username,password,full_name) "
                . " VALUES ('".$this->username."','".$this->password."','".$this->full_name."')";
        return $this->db->query($sql);
    }
    
    function read(){
        $sql="SELECT  * FROM users";
        $datos=array();
        $tabla=$this->db->query($sql);
        foreach ($tabla as $fila){
            $datos[]=$fila;
        }
        return $datos;
    }
    

}
