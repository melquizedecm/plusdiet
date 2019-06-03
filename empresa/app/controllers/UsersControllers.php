<?php
require_once '../models/Users.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UsersControllers
 *
 * @author melqui
 */
//
//$users= new Users();
//$users->username ="user1";
//$users->password ="user1";
//$users->full_name ="Juan Perez";
//echo $users->create();
        
$users= new Users();
$datos=$users->read();
echo  json_encode($datos);