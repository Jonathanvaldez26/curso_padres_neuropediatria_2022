<?php
namespace App\controllers;
defined("APPPATH") OR die("Access denied");

use \Core\View;
use \Core\Controller;

class Patrocinadores extends Controller{

    private $_contenedor;

    function __construct(){
        parent::__construct();
        $this->_contenedor = new Contenedor;
        View::set('header',$this->_contenedor->header());
        View::set('footer',$this->_contenedor->footer());
    }

    public function getUsuario(){
      return $this->__usuario;
    }

    public function index() {
     $extraHeader =<<<html
      <link id="pagestyle" href="/assets/css/style.css" rel="stylesheet" />
      <title>
            Home - AMETD
      </title>
html;



        View::set('header',$this->_contenedor->header($extraHeader));
        //View::set('permisos_mexico',$permisos_mexico);
        //View::set('tabla',$tabla);
        View::render("patrocinadores");
    }

}
