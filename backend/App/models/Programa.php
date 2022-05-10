<?php
namespace App\models;
defined("APPPATH") OR die("Access denied");

use \Core\Database;
use \Core\MasterDom;
use \App\interfaces\Crud;
use \App\controllers\UtileriasLog;

class Programa{

    public static function getAll(){
      $mysqli = Database::getInstance();
      $query=<<<sql
        SELECT pg.*, pf.nombre AS nombre_profesor, pf.prefijo, pf.descripcion AS desc_profesor, co.nombre AS nombre_coordinador, co.prefijo AS prefijo_coordinador
        FROM programa pg
        INNER JOIN profesores pf
        ON pg.id_profesor = pf.id_profesor
        INNER JOIN coordinadores co
        ON co.id_coordinador = pg.id_coordinador
sql;
      return $mysqli->queryAll($query);
    }

    public static function getSectionByDate($fecha){
      $mysqli = Database::getInstance();
      $query=<<<sql
        SELECT pg.*, pf.nombre AS nombre_profesor, pf.prefijo, pf.descripcion AS desc_profesor, co.nombre AS nombre_coordinador, co.prefijo AS prefijo_coordinador
        FROM programa pg
        INNER JOIN profesores pf
        ON pg.id_profesor = pf.id_profesor
        INNER JOIN coordinadores co
        ON co.id_coordinador = pg.id_coordinador

        WHERE fecha = '$fecha'
sql;
      return $mysqli->queryAll($query);
    }

    public static function getById($id){
      return "getById"+$id;
    }

    public static function getProgramByClave($clave){
      $mysqli = Database::getInstance();
      $query=<<<sql
      SELECT pg.*, pf.nombre AS nombre_profesor, pf.prefijo, pf.descripcion AS desc_profesor, co.nombre AS nombre_coordinador, co.prefijo AS prefijo_coordinador
      FROM programa pg
      INNER JOIN profesores pf
      ON pg.id_profesor = pf.id_profesor
      INNER JOIN coordinadores co
      ON co.id_coordinador = pg.id_coordinador
      WHERE clave = '$clave'
sql;
      return $mysqli->queryOne($query);
    }

//     public static function getProgramaByClave($clave){
//       $mysqli = Database::getInstance();
//       $query=<<<sql
//       SELECT * 
//       FROM programa
//       WHERE clave = '$clave'
// sql;
//       return $mysqli->queryOne($query);
//     }

    public static function updateVistasByClave($clave,$vistas){
      $mysqli = Database::getInstance();
      $query=<<<sql
        UPDATE cursos SET vistas = '$vistas'
        WHERE clave = '$clave'
sql;
      return $mysqli->update($query);
    }

    public static function updateLike($id_programa, $registrado,$status){
      $mysqli = Database::getInstance();
      $query=<<<sql
        UPDATE likes SET status = '$status'
        WHERE id_programa = '$id_programa' AND id_registrado = '$registrado'
sql;
      return $mysqli->update($query);
    }

    public static function getContenidoByAsignacion($id_registrado,$clave_taller){
      $mysqli = Database::getInstance();
      $query=<<<sql
      SELECT c.nombre, r.nombreconstancia, ac.* FROM asigna_curso ac
      INNER JOIN registrados r
      ON ac.id_registrado = r.id_registrado
      INNER JOIN cursos c
      ON c.id_programa = ac.id_programa
      
      WHERE r.id_registrado = $id_registrado and c.clave = '$clave_taller'
sql;
      return $mysqli->queryAll($query);
    }

    public static function getByIdUser($id){
      $mysqli = Database::getInstance();
      $query=<<<sql
        SELECT id_prueba_covid, fecha_carga_documento, fecha_prueba_covid, tipo_prueba, resultado, documento, status FROM prueba_covid WHERE utilerias_asistentes_id = $id ORDER BY id_prueba_covid ASC;
sql;
      return $mysqli->queryAll($query);
    }

    public static function getlike($id_programa, $registrado){
      $mysqli = Database::getInstance();
      $query=<<<sql
        SELECT * 
        FROM likes
        WHERE id_registrado = $registrado AND id_programa = '$id_programa'
sql;
      return $mysqli->queryOne($query);
    }
    public static function insertLike($curso,$registrado){
      // $fecha_carga_documento = date("Y-m-d");
      $mysqli = Database::getInstance(1);
      $query=<<<sql
      INSERT INTO likes(id_like, id_registrado, id_programa, status) 
      VALUES (null,'$registrado','$curso','1')
sql;

    $id = $mysqli->insert($query);

    //UtileriasLog::addAccion($accion);
    return $id;
      // return "insert"+$data;
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

    public static function getAsignaCurso($usuario){
      $mysqli = Database::getInstance(true);
      $query =<<<sql
      SELECT r.*, c.nombre AS nombre_curso, c.*
      FROM asigna_curso ac
      INNER JOIN registrados r
      ON ac.id_registrado = r.id_registrado
      INNER JOIN cursos c
      ON c.id_programa = ac.id_programa

      WHERE ac.id_registrado = $usuario
sql;

      return $mysqli->queryAll($query);
  }

  public static function getProgreso($id,$num_curso){
    $mysqli = Database::getInstance(true);
    $query =<<<sql
    SELECT * FROM progresos_programa
    WHERE id_programa = $num_curso AND id_registrado = $id
sql;

    return $mysqli->queryOne($query);
  }

  public static function insertProgreso($registrado,$curso){
      $mysqli = Database::getInstance(1);
      $query=<<<sql
      INSERT INTO progresos_programa (id_programa, id_registrado, segundos,fecha_ultima_vista) 
      VALUES ('$curso','$registrado','0', NOW())
sql;

    $id = $mysqli->insert($query);

    return $id;
  }

  public static function updateProgreso($id_programa, $registrado, $segundos){
      $mysqli = Database::getInstance();
      $query=<<<sql
          UPDATE progresos_programa 
          SET segundos = '$segundos'
          WHERE id_programa = '$id_programa' 
          AND id_registrado = '$registrado'
sql;
      return $mysqli->update($query);
  }

  public static function updateProgresoFecha($id_programa, $registrado, $segundos){
    $mysqli = Database::getInstance();
    $query=<<<sql
        UPDATE progresos_programa 
        SET segundos = '$segundos', fecha_ultima_vista = NOW()
        WHERE id_programa = '$id_programa' 
        AND id_registrado = '$registrado'
sql;
    return $mysqli->update($query);
  } 
}