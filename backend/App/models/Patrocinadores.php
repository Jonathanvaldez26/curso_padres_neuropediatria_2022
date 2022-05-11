<?php
namespace App\models;
defined("APPPATH") OR die("Access denied");

use \Core\Database;
use \Core\MasterDom;
use \App\interfaces\Crud;
use \App\controllers\UtileriasLog;

class Patrocinadores{
   
  public static function getTablePatrocinadores()
  {
      $mysqli = Database::getInstance(true);
      $query =<<<sql
      SELECT *
      FROM patrocinadores
sql;
      return $mysqli->queryAll($query);
  }
}