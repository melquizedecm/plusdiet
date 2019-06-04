<?php

class Config{
    function __construct(){
        
        ////declaracion  de las variables de inicio
        $host="localhost";
        $user="root";
        $password="";
        $database="diet";
        ///Funcion para conectar///
        return mysqli_connect($host,$user,$password,$database);
    }
}

