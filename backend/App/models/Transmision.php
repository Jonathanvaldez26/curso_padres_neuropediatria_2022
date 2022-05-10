<?php
namespace App\models;
defined("APPPATH") OR die("Access denied");

use \Core\Database;
use \App\interfaces\Crud;

class Transmision{


    public static function getLineaPrincialAll(){
        $mysqli = Database::getInstance(true);
        $query =<<<sql
        SELECT * FROM especialidades
sql;

        return $mysqli->queryAll($query);
    }

    public static function getTransmisionById($id){
        $mysqli = Database::getInstance(true);
        $query =<<<sql
        SELECT * FROM transmision
        WHERE id_transmision = $id
sql;

        return $mysqli->queryOne($query);
    }

    public static function getProgrsoTransmision($id,$num_transmision){
        $mysqli = Database::getInstance(true);
        $query =<<<sql
        SELECT * FROM progresos_transmision
        WHERE id_transmision = $num_transmision AND id_registrado = $id
sql;

        return $mysqli->queryOne($query);
    }

    public static function insertProgreso($registrado,$transmision){
        $mysqli = Database::getInstance(1);
        $query=<<<sql
        INSERT INTO progresos_transmision (id_transmision, id_registrado, segundos, fecha_ultima_vista) 
        VALUES ('$transmision','$registrado','0', NOW())
sql;
  
      $id = $mysqli->insert($query);
  
      return $id;
    }

    public static function updateProgreso($id_transmision, $registrado, $segundos){
        $mysqli = Database::getInstance();
        $query=<<<sql
            UPDATE progresos_transmision SET segundos = '$segundos'
            WHERE id_transmision = '$id_transmision' AND id_registrado = '$registrado'
sql;
        return $mysqli->update($query);
    }

    public static function updateProgresoFecha($id_transmision, $registrado, $segundos){
        $mysqli = Database::getInstance();
        $query=<<<sql
            UPDATE progresos_transmision SET segundos = '$segundos', fecha_ultima_vista = NOW()
            WHERE id_transmision = '$id_transmision' AND id_registrado = '$registrado'
sql;
        return $mysqli->update($query);
    } 

    public static function getPais(){
        $mysqli = Database::getInstance(true);
        $query =<<<sql
        SELECT * FROM especialidades
sql;

        return $mysqli->queryAll($query);
    }
}