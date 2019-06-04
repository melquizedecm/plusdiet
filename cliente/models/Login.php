<?php
require_once '../core/Config.php';
class User { 
    private $username; 
    private $password; 
    private $id; 

    function __construct( $username, $password ) { 
          $this->username = $username; 
          $this->password = $password; 
    } 
   public function validateUser( ) { 
        $sql  = "SELECT id FROM  usuarios WHERE username = '$username' AND password = '$password' "; 
        $dato = mysql_fetch_array( mysql_query( $sql) ); 

       if( $dato['id'] > 0 )  { 
           return $dato['id']; 
       } else { 
          return 0; 
       } 
   } 
}