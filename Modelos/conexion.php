<?php

class Conexion {
    
    static public function conectar(){

        try {
            $conn = new PDO("mysql:host=localhost;dbname=veico", "root", "", array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
            return $conn;
        } catch (PDOException $e) {
            // Lanza una excepción en lugar de imprimir directamente el mensaje de error
            throw new Exception('Falló la conexión: ' . $e->getMessage());
        }
    }

}
