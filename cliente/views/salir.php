<?php
  // Eliminamos la sesion
	@session_start();
	session_destroy();
	header("Location: ../views/sesion.php");
 
 ?>
