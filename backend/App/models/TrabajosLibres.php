<?php
namespace App\models;
defined("APPPATH") OR die("Access denied");

use \Core\Database;
use \Core\MasterDom;
use \App\interfaces\Crud;
use \App\controllers\UtileriasLog;

class TrabajosLibres{
   
  public static function getTableTrabajosLibres()
  {
      $mysqli = Database::getInstance(true);
      $query =<<<sql
      SELECT *
      FROM trabajos_libres
sql;
      return $mysqli->queryAll($query);
  }

}