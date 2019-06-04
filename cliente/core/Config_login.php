<?php
    ////declaracion  de las variables de inicio
$mysqli = new mysqli("localhost", "root", "", "diet");
if($mysqli->connect_errno) {
    echo "<b>Fallo al conectar a la BD: </b>" . $mysqli->connect_errno . "---" . $mysqli->connect_error;
}
return $mysqli;
?>   