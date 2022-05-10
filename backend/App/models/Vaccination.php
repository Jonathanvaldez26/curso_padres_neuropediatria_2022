<?php
namespace App\models;
defined("APPPATH") OR die("Access denied");

use \Core\Database;
use \Core\MasterDom;
use \App\interfaces\Crud;
use \App\controllers\UtileriasLog;

class Vaccination{

    public static function getCount($id){

        $mysqli = Database::getInstance(true);
        $query =<<<sql
        SELECT COUNT(*) as count FROM comprobante_vacuna WHERE utilerias_asistentes_id = $id ORDER BY id_comprobante_vacuna ASC;
sql;
        return $mysqli->queryOne($query);
    }

    public static function getAll(){
      $mysqli = Database::getInstance();
      $query=<<<sql
        SELECT * FROM comprobante_vacuna ORDER BY comprobante_vacuna ASC;
sql;
      return $mysqli->queryAll($query);
    }

    public static function getById($id){
      return "getById"+$id;
    }

    public static function getByIdUser($id){
      $mysqli = Database::getInstance();
      $query=<<<sql
        SELECT * FROM comprobante_vacuna WHERE utilerias_asistentes_id = $id and status = 1 ORDER BY id_comprobante_vacuna ASC;
sql;
      return $mysqli->queryAll($query);
    }

    public static function insert($data){
        $fecha_carga_documento = date("Y-m-d");
        $mysqli = Database::getInstance(1);
        $query=<<<sql
        INSERT INTO comprobante_vacuna (id_comprobante_vacuna, utilerias_asistentes_id, fecha_carga_documento, numero_dosis, marca_dosis, documento, status) VALUES ('',:utilerias_asistentes_id, NULL, :numero_dosis, :marca_dosis, :documento, 1);
sql;
        $parametros = array(
            ':utilerias_asistentes_id'=>$data->_user,
            ':numero_dosis'=>$data->_numero_dosis,
            ':marca_dosis'=>$data->_marca_dosis,
            ':documento'=>$data->_url
        );
      $id = $mysqli->insert($query,$parametros);
      $accion = new \stdClass();
      $accion->_sql= $query;
      $accion->_parametros = $parametros;
      $accion->_id = $id;
      return $id;
    }

    public static function update($data){
        return "update"+$data;
    }

    public static function delete($id){
        return "delete"+$id;
    }
}