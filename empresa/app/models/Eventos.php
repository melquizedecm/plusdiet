<?php

require_once "../core/config.php";
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Eventos extends Config {

    private $id;
    public $tipo;
    public $destino;
    public $url_imagen;
    private $db;

    function __CONSTRUCT() {
        $this->db = parent::conectar();
    }

    function create() {
        $sql = "INSERT INTO eventos (tipo,destino,url_imagen,id_users) VALUES ('" . $this->tipo . "','" . $this->destino . "','" . $this->url_imagen . "', '1')";
        return $this->db->query($sql);
    }

    function read() {
        $sql = "SELECT * FROM eventos";
        $response = $this->db->query($sql);
        $table = array();
        foreach ($response as $row) {
            $table[] = $row;
        }
        $this->db = null;
        return $table;
    }

    function readOne($id) {
        $sql = "SELECT * FROM eventos WHERE id='" . $this->id . "'";
        $response = $this->db->query($sql);
        $table = array();
        foreach ($response as $row) {
            $table[] = $row;
        }
        $this->db = null;
        return $table;
    }

    function readTen() {
        $sql = "SELECT * FROM eventos ORDER BY id desc LIMIT 10";
        $datos = array();
        $tabla = $this->db->query($sql);
        foreach ($tabla as $fila) {
            $datos[] = $fila;
        }
        return $datos;
    }

}



//    function update() {
//        $link = conectar();
//        $sql = "UPDATE users SET name='" . $this->name . "', "
//                . " password='" . $this->password . "' WHERE id='" . $this->id . "'";
//        return $link->query($sql);
//    }
//
//    function delete() {
//        $link = conectar();
//        $sql = "UPDATE users SET status='0' WHERE id='" . $this->id . "'";
//        return $link->query($sql);
//    }

