<?php
class Conexion{

    public function conectar(){

        $conn = new PDO("mysql:host=localhost;dbname=antvasweb",
                        "root",
                        "",
                        array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                              PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
                        );

        return $conn;
    }
}