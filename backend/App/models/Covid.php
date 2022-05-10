<?php
namespace App\models;
defined("APPPATH") OR die("Access denied");

use \Core\Database;
use \Core\MasterDom;
use \App\interfaces\Crud;
use \App\controllers\UtileriasLog;

class Covid{

    public static function getAll(){
      $mysqli = Database::getInstance();
      $query=<<<sql
        SELECT id_prueba_covid, fecha_carga_documento, fecha_prueba_covid, tipo_prueba, resultado, documento, status FROM prueba_covid ORDER BY id_prueba_covid ASC;
sql;
      return $mysqli->queryAll($query);
    }

    public static function getById($id){
      return "getById"+$id;
    }

    public static function getByIdUser($id){
      $mysqli = Database::getInstance();
      $query=<<<sql
        SELECT id_prueba_covid, fecha_carga_documento, fecha_prueba_covid, tipo_prueba, resultado, documento, status FROM prueba_covid WHERE utilerias_asistentes_id = $id ORDER BY id_prueba_covid ASC;
sql;
      return $mysqli->queryAll($query);
    }

    public static function insert($data){
        $fecha_carga_documento = date("Y-m-d");
        $mysqli = Database::getInstance(1);
        $query=<<<sql
        INSERT INTO prueba_covid (id_prueba_covid, utilerias_asistentes_id, fecha_carga_documento, fecha_prueba_covid, tipo_prueba, resultado, documento, status) VALUES ('',:utilerias_asistentes_id, :fecha_carga_documento, :fecha_prueba_covid, :tipo_prueba, :resultado, :documento, 0);
sql;

    	$parametros = array(
    		':utilerias_asistentes_id'=>$data->_user,
    		':fecha_carga_documento'=>$fecha_carga_documento,
    		':fecha_prueba_covid'=>$data->_fecha_prueba,
        ':tipo_prueba'=>$data->_tipo_prueba,
        ':resultado'=>$data->_resultado,
        ':documento'=>$data->_url
            
    	);
      $id = $mysqli->insert($query,$parametros);
      $accion = new \stdClass();
      $accion->_sql= $query;
      $accion->_parametros = $parametros;
      $accion->_id = $id;

      //UtileriasLog::addAccion($accion);
      return $id;
        // return "insert"+$data;
    }

    public static function update($data){
        return "update"+$data;
    }

    public static function delete($id){
        return "delete"+$id;
    }
}