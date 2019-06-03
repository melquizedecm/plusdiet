<?php

class Config {

    function conectar() {
        ///PARAMETROS PARA WEB
        $DBuser = 'labora53_caros';
        $DBpass = 'caros135790';
        $DBserver = 'localhost';
        $DBdatos = 'labora53_caros';

        ////////////NUEVO METODO DE CONEXION////////////////////
        $link = mysqli_connect($DBserver, $DBuser, $DBpass, $DBdatos);

        return $link;
    }

}
