<?php

require_once "../models/Eventos.php";
$eventos = new Eventos();

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//class EventosController extends Eventos {
//            
//    function index() {
//        
//        $tabla = parent::read();
//        require_once("../view/eventos.php");
//    }
//
////
////
////
////if (isset($_POST['tipo'])){
////    
////    $tipo=$_POST['tipo'];
////    $destino=$_POST['destino'];
////    $url_imagen='001.jpg';
////    $eventos = new Eventos($tipo, $destino, $url_imagen);
////    $result= $eventos->create();
////    
////    if($result){
////        $msg="Registro Agregado con exito";
////      //  header("location: ../views/index.php?msg=".$msg);
////    }
////    else{
////        $msg="Error al guardar";
////      //  header("location: ../views/index.php?msg=".$msg);
////    }
////    echo $msg;
////}
//
//}

if (isset($_POST['movil'])) {

    ///apertura desde el movil
    if ($_POST['action'] == '3') {
        $eventos->tipo = '3';
        $eventos->destino = '1';
        $eventos->url_imagen = $_POST['url_imagen'];
        $eventos->create();
        echo "1";
        ///enviar señal al Hardware
    }

    ///bloqueo desde el movil///
    if ($_POST['action'] == '2') {
        $eventos->tipo = '2';
        $eventos->destino = '1';
        $eventos->url_imagen = $_POST['url_imagen'];
        $eventos->create();
        echo "0";
    }
    //enviar al movil los ultimos 10 accesos
    if ($_POST['action'] == '5') {
        $datos = $eventos->readTen();
        echo json_encode($datos);
    }
}

////apertura desde el hardware///
if (isset($_POST['hardware'])) {
    if ($_POST['action'] == '1') {
        $eventos->tipo = '1';
        $eventos->destino = '0';
        $eventos->url_imagen = $_POST['imagen'];
        $eventos->create();
        ///enviar señal al Hardware
    }
    ///bloqueo desde el hardware///
    if ($_POST['action'] == '0') {
        $eventos->tipo = '0';
        $eventos->destino = '0';
        $eventos->url_imagen = 'imagen';
        $eventos->create();
    }

    if ($_POST['action'] == '5') {
        $datos = $eventos->readTen();
        echo json_encode($datos);
    }
}


